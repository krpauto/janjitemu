<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('administrator_model');
        $this->load->model('petugas_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);

        $this->load->view('templates/footer');
    }

    public function tambah_surat()
    {
        $data['title'] = 'Tambah Surat Tugas';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['berkas'] = $this->admin_model->data()->result();
        $data['petugas_ukur'] = $this->petugas_model->data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah_surat');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_surat();
        } else {
            // var_dump($_POST);
            $data = array(
                'no_surat' => $this->input->post('no_surat', true),
                'tgl_surat' => date('Y-m-d'),
                'no_berkas' => $this->input->post('no_berkas', true),
                'nip' => $this->input->post('nip'),
                'tugas' => $this->input->post('tugas', true),
                'beban_biaya' => $this->input->post('beban_biaya', true),
                'status' => 2,
            );
            $this->admin_model->insert_data($data, 'surat_tugas');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('petugas/surat_tugas');
        }
    }

    public function deletesurat($id)
    {
        $where = array('id_surat' => $id);

        $this->admin_model->deletesurat($where, 'surat_tugas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('petugas/surat_tugas');
    }

    public function _rules()
    {

        $this->form_validation->set_rules('no_surat', 'Nomor Surat', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('no_berkas', 'Nomor Berkas', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('nip', 'NIP', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('tugas', 'Tugas', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('beban_biaya', 'Beban Biaya', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }
}
