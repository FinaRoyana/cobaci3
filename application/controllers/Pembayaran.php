<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pembayaran');
        $this->load->model('Model_siswa');
        $this->load->model('Model_kelas');
    }
    public function index()
    {
        $data['title'] = 'Pembayaran';
        $data['siswa'] = $this->Model_pembayaran->get_data_all();

        $this->load->view('template/header.php', $data);
        $this->load->view('pembayaran.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('template/footer.php');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pembayaran';
        $data['siswa'] = $this->Model_pembayaran->get_data('pembayaran');
        $data['anggota'] = $this->Model_pembayaran->get_data_anggota();
        $data['kelas'] = $this->Model_pembayaran->get_data_kelas();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('v_tambah_pembayaran.php');
        $this->load->view('template/footer.php');
    }

    public function aksi_tambah()
    {

        // $this->validation();
        // if ($this->form_validation->run() == FALSE) {
        //     $this->tambah_pembayaran();
        // } else {
        $data['anggota'] = $this->Model_siswa->get_data('anggota');
        $data['kelas'] = $this->model_pembayaran->get_data_kelas_byId;
        $data['pby'] = $this->Model_pembayaran->get_data_all();
        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'id_kelas' => $this->input->post('id_kelas'),
            'tgl_bayar' => $this->input->post('tgl_bayar'),
            'nominal' => $this->input->post('nominal'),
            'bayar' => $this->input->post('bayar'),

        );
        $this->Model_pembayaran->insert($data, 'pembayaran');
        redirect('pembayaran');
        // }
    }
    public function hapus($id_pembayaran)
    {
        $data = array(
            'id_pembayaran' => $id_pembayaran
        );
        $this->Model_pembayaran->delete($data, 'pembayaran');
        redirect('pembayaran');
    }
}
