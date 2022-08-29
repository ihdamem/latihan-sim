<?php
class userlogout extends CI_Controller
{
	public function index()
	{
		//hapus session
		$this->session->sess_destroy();

		//menuju ke halaman login
		redirect('Homepage/login');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
}
