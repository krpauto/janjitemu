<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_petugas', $data['id_petugas']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // select option petugas
    public function data()
    {
        $this->db->order_by('id_petugas', 'DESC');
        return $query = $this->db->get('petugas_ukur');
    }

    public function get_no_surat($id)
    {
        return $this->db->get_where('surat_tugas', ['id' => $id])->row_array();
    }

    public function ambil_id($id)
    {
        $this->db->where('id_petugas',$id);
        return $this->db->get('petugas_ukur');
        
    }

    public function getdatawithstatus($table)
    {
        $this->db->select('*');
        $this->db->from('pengukuran');
        $this->db->join('status', 'status.id = pengukuran.status');
        $query = $this->db->get();
        return $query;
    }
}
