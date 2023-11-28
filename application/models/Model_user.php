<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function delete($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
}
