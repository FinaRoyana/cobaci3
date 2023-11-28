<?php
defined('BASEPATH') or exit('No direct script access allowed');

class anggotaSiswa extends CI_Controller
{
    public function index()
    {

        $data['title'] = 'Login';
        $this->load->view('template_anggota/header.php', $data);
        $this->load->view('v_siswa');
        $this->load->view('template_anggota/sidebar.php', $data);
        $this->load->view('template_anggota/footer.php', $data);
    }
}
