<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('home');
        $this->load->view('template/footer.php');
    }

    public function login()
    {
        $data['title'] = 'Login';

        $this->load->view('v_login', $data);
    }

    public function register()
    {
        $data['title'] = 'Register';

        $this->load->view('v_registrasi', $data);
    }

    public function aksi_register()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'lvl' => $this->input->post('lvl')
        );
        $this->Model_login->insert_register($data, 'user');
        redirect('home/login');
    }

    public function login_aksi()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $lvl = $this->input->post('lvl', true);

        //rule validasi
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('lvl', 'Level', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'username' => $username,
                'password' => $password,
                'lvl' => $lvl
            );

            $cekLogin = $this->Model_login->cek_login($where)->num_rows();

            if ($cekLogin > 0 && $lvl == 'admin') {
                $data = array(
                    'username' => $username,
                    'login' => 'OK'
                );

                $this->session->set_userdata($data);

                redirect(base_url('siswa'));
            } else if ($cekLogin > 0 && $lvl == 'anggota') {
                $data = array(
                    'username' => $username,
                    'login' => 'OK'
                );

                $this->session->set_userdata($data);

                redirect(base_url('anggotaSiswa'));
            } else {
                echo "usn / password anda salah!";
                redirect(base_url('home/login'));
                // $this->session->set_flashdata('flash_welcome', 'Usn / password salah');

            }
        } else {
            echo "usn / password anda salah!";

            redirect('home/login');
            $this->session->set_flashdata('flash_welcome', 'Usn / password salah');
        }
    }
    // Validate and store registration data in database

    function logout()
    {
        $this->session->sess_destroy();
        redirect('home/login');
    }
}
