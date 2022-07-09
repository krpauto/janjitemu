<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('administrator_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrator/index', $data);
        $this->load->view('templates/footer');
    }

    public function laporan()
    {
        $data['title'] = 'Laporan Hasil Pengukuran';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->administrator_model->getdatawithstatus('pengukuran')->result();
        $data['laporan'] = $this->administrator_model->get_data('pengukuran')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrator/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function berkas()
    {
        $data['title'] = 'Berkas Pemohon';
        $data['berkas'] = $this->administrator_model->get_data('berkas')->result();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrator/berkas', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Berkas';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrator/tambah');
        $this->load->view('templates/footer');
    }

    public function edit_data($id)
    {
        $data['title'] = 'Edit Data Berkas';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['berkas'] = $this->administrator_model->ambil_id($id)->result()[0];
        // var_dump($data['petugas']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrator/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $data = array(
                'no_berkas' => $this->input->post('no_berkas'),
                'nama_pemohon' => $this->input->post('nama_pemohon'),
                'no_telp' => $this->input->post('no_telp'),
                'volume' => $this->input->post('volume'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kota' => $this->input->post('kota'),
                'provinsi' => $this->input->post('provinsi'),
                'tgl_terima' => date('Y-m-d'),
                'alamat' => $this->input->post('alamat'),
            );

            $this->administrator_model->insert_data($data, 'berkas');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/berkas');
        }
    }

    public function edit($id_berkas)
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $data = array(
                'no_berkas' => $this->input->post('no_berkas'),
                'nama_pemohon' => $this->input->post('nama_pemohon'),
                'no_telp' => $this->input->post('no_telp'),
                'volume' => $this->input->post('volume'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kota' => $this->input->post('kota'),
                'provinsi' => $this->input->post('provinsi'),
                'tgl_terima' => $this->input->post('tgl_terima'),
                'alamat' => $this->input->post('alamat'),
            );

            $this->administrator_model->update_data($data, 'berkas');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/berkas');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('no_berkas', 'Nomor Berkas', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('volume', 'Volume Ukur', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('kota', 'Kota', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('tgl_terima', 'Tanggal Terima', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function delete($id)
    {
        $where = array('id_berkas' => $id);

        $this->administrator_model->delete($where, 'berkas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/berkas');
    }

    public function delete_laporan($id)
    {
        $where = array('id' => $id);

        $this->administrator_model->delete($where, 'pengukuran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/laporan');
    }

    public function surat_tugas()
    {
        $data['title'] = 'Daftar Surat Tugas';
        $data['berkas'] = $this->administrator_model->get_data('berkas')->result();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrator/berkas', $data);
        $this->load->view('templates/footer');
    }
}
