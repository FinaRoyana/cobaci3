<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_data_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get()->result();
    }
}
