<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
        // select option berkas
        public function data()
        {
            $this->db->order_by('id_berkas','DESC');
            return $query = $this->db->get('berkas');
        }

        // select option petugas
        public function datapetugas()
        {
            $this->db->order_by('id_petugas','DESC');
            return $query = $this->db->get('petugas_ukur');
        }
        public function deletesurat($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }
        public function insert_data($data, $table)
        {
            $this->db->insert($table, $data);
        }
}