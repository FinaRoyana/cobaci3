<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_pembayaran extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_data_all()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('anggota', 'anggota.id_anggota = pembayaran.id_anggota', 'left');
        $this->db->join('kelas', 'kelas.id_kelas = pembayaran.id_kelas', 'left');

        return $this->db->get()->result();
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_data_anggota()
    {
        $this->db->select('*');
        $this->db->from('anggota');
        return $this->db->get()->result();
    }
    public function get_data_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get()->result();
    }

    public function get_data_kelas_byId()
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('kelas', 'kelas.id_kelas = anggota.id_kelas', 'left');
        $this->db->where('anggota');
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->get()->result();
    }

    public function delete($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
}
