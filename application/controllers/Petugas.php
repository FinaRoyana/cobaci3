<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['user'] = $this->Model_user->get_data('user')->result();


        $this->load->view('template/header.php', $data);
        $this->load->view('v_user', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('template/footer.php');
    }

    public function hapus($id_user)
    {
        $data = array(
            'id_user' => $id_user
        );
        $this->Model_user->delete($data, 'user');
        redirect('petugas');
    }
}
