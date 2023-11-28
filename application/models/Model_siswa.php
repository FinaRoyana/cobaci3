<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_data_all()
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('kelas', 'kelas.id_kelas = anggota.id_kelas', 'left');
        return $this->db->get()->result();
    }

    public function get_data_by_id($table, $id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota);
        return $this->db->get($table);
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_anggota', $data['id_anggota']);
        $this->db->update($table, $data);
    }

    public function delete($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function get_data_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get()->result();
    }





    // public function tambah()
    // {
    //     $data = array(
    //         'kd_anggota' => $this->input->post('kd_anggota'),
    //         'nama_anggota' => $this->input->post('nama_anggota'),
    //         'kelas' => $this->input->post('kelas'),
    //         'jk_anggota' => $this->input->post('jk_anggota'),
    //         'no_telp_anggota' => $this->input->post('no_telp_anggota'),

    //         // 'link' => strtolower(str_replace([" ", "-", "_"], "-", $this->input->post('nama_kategori')))
    //     );


    //     $this->Model_siswa->tambah($data);
    //     $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
    //     redirect('siswa');
    // }
}
