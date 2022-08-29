<?php
class userlogin extends CI_Controller
{
	public function index()
	{
		$this->load->view('Homepage/login');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('dataanggota', 'model');
		$this->table = 'anggota';
	}

	public function process()
	{
		//cek jika tombol diklik
		if (isset($_POST['login'])) {
			//ambil data dari inputan pengguna
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			//cek jika username dan password sudah terisi
			if ($email and $password) {
				$data = [
					'email' => $email,
					'password' => $password
				];
				$user_account = $this->model->cek_login($this->table, $data)->row();

				if ($user_account) {
					$session_data = [
						'email' => $user_account->email,
						'password' => $user_account->password
					];
					$this->session->set_userdata($session_data);
					redirect('user/show');
				} else {
					$this->session->set_flashdata('error', 'username atau password tidak sesuai');
					redirect('Homepage/login');
				}
			} else {
				$this->session->set_flashdata('error', 'Semua data harus diisi');
				redirect('Homepage/login');
			}
		}
	}
}
