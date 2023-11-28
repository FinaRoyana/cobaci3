<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('v_registrasi');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
