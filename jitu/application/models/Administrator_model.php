<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function getdatawithstatus($table)
    {
        $this->db->select('*');
        $this->db->from('pengukuran');
        $this->db->join('status', 'status.id = pengukuran.status');
        $query = $this->db->get();
        return $query;
    }


    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_berkas', $data['id_berkas']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function delete_laporan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_berkas()
    {
        return $this->db->get('berkas');
    }

    // select option berkas
    public function data()
    {
        $this->db->order_by('id_berkas', 'DESC');
        return $query = $this->db->get('berkas');
    }
    public function ambil_id($id)
    {
        $this->db->where('id_berkas',$id);
        return $this->db->get('berkas');
        
    }
}
