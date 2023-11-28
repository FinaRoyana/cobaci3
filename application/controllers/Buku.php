<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_buku');
    }
    public function index()
    {
        $data['title'] = 'Buku';
        $data['tbuku'] = $this->Model_buku->get_data('buku')->result();

        $this->load->view('template/header.php', $data);
        $this->load->view('buku.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('template/footer.php');
    }

    public function hapus($id_buku)
    {
        $data = array(
            'id_buku' => $id_buku
        );
        $this->Model_buku->delete($data, 'buku');
        redirect('buku');
    }
}
