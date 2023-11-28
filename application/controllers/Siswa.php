<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_siswa');
        $this->load->model('Model_kelas');
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['siswa'] = $this->Model_siswa->get_data_all();


        $this->load->view('template/header.php', $data);
        $this->load->view('siswa.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('template/footer.php');
    }
    public function tambah_anggota()
    {
        $data['title'] = 'Tambah Anggota';
        $data['siswa'] = $this->Model_siswa->get_data_all();
        $data['kelas'] = $this->Model_kelas->get_data('kelas');
        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('v_tambah_anggota.php');
        $this->load->view('template/footer.php');
    }

    public function edit_anggota()
    {
        $data['title'] = 'Edit Anggota';
        $data['siswa'] = $this->Model_siswa->edit('data', 'anggota')->result();
        $data['kelas'] = $this->Model_kelas->edit('data', 'kelas')->result();

        $this->load->view('v_edit_anggota.php');
        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('template/footer.php');
    }

    public function tambah()
    {
        $data['siswa'] = $this->Model_siswa->get_data_all();
        $data['kelas'] = $this->Model_kelas->get_data_kelas();
        $this->validation();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_anggota();
        } else {
            $data = array(

                'kd_anggota' => $this->input->post('kd_anggota'),
                'nama_anggota' => $this->input->post('nama_anggota'),
                'kelas' => $this->input->post('kelas'),
                'id_kelas' => $this->input->post('id_kelas'),
                'jk_anggota' => $this->input->post('jk_anggota'),
                'jurusan_anggota' => $this->input->post('jurusan_anggota'),
                'no_telp_anggota' => $this->input->post('no_telp_anggota'),

            );
            $this->Model_siswa->insert($data, 'anggota');
            redirect('siswa');
        }
    }

    public function validation()
    {
        // validation agar diisi
        $this->form_validation->set_rules('kd_anggota', 'Kode Anggota', 'required', array(
            'required' => '%s Harus Diisi!'
        ));
        $this->form_validation->set_rules('nama_anggota', 'Nama Anggota', 'required', array(
            'required' => '%s Harus Diisi!'
        ));
        $this->form_validation->set_rules('kelas', 'Kelas', 'required', array(
            'required' => '%s Harus Diisi!'
        ));
        $this->form_validation->set_rules('jk_anggota', 'Jenis Kelamin', 'required', array(
            'required' => '%s Harus Diisi!'
        ));
        $this->form_validation->set_rules('jurusan_anggota', 'Jurusan', 'required', array(
            'required' => '%s Harus Diisi!'
        ));
        $this->form_validation->set_rules('no_telp_anggota', 'No Telepon Anggota', 'required', array(
            'required' => '%s Harus Diisi!'
        ));
    }


    public function edit($id_anggota)
    {

        $this->validation();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_anggota' => $id_anggota,
                'kd_anggota' => $this->input->post('kd_anggota'),
                'nama_anggota' => $this->input->post('nama_anggota'),
                'kelas' => $this->input->post('kelas'),
                'jk_anggota' => $this->input->post('jk_anggota'),
                'jurusan_anggota' => $this->input->post('jurusan_anggota'),
                'no_telp_anggota' => $this->input->post('no_telp_anggota'),
            );
            $this->Model_siswa->update_data($data, 'anggota');
            redirect('siswa');
        }
    }
    public function hapus($id_anggota)
    {
        $data = array(
            'id_anggota' => $id_anggota
        );
        $this->Model_siswa->delete($data, 'anggota');
        redirect('siswa');
    }

    public function edit_data($id_anggota)
    {
        $data['title'] = 'Edit Siswa';
        $data['siswa'] = $this->Model_siswa->get_data_by_id('anggota', $id_anggota)->result();
        $data['kelas'] = $this->Model_kelas->get_data('anggota')->result();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('v_edit_anggota.php');
        $this->load->view('template/footer.php');
    }

    public function update_edit_data($id_anggota)
    {
        $this->validation();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_data($id_anggota);
        } else {
            $data = array(
                'id_anggota' => $id_anggota,
                'kd_anggota' => $this->input->post('kd_anggota'),
                'nama_anggota' => $this->input->post('nama_anggota'),
                'kelas' => $this->input->post('kelas'),
                'jk_anggota' => $this->input->post('jk_anggota'),
                'jurusan_anggota' => $this->input->post('jurusan_anggota'),
                'no_telp_anggota' => $this->input->post('no_telp_anggota'),
            );
            $this->Model_siswa->update_data($data, 'anggota');
            redirect('siswa');
        }
    }
}
