<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('loginModel');
	}

	public function index() {
		$this->load->view('pages/login');
	}

	public function login_check() {
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		//$pass = $this->input->post('password');
		$param = array(
			'nama' => $user,
			'kata_sandi' => $pass
		);
		$check = $this->loginModel->checkLogin($param);
		alert($check);
		if($check->num_rows() >= 1){
			$dataSession = array(
				'nama'	=> $check->first_row()->nama,
			);
			$this->session->set_userdata($dataSession);			
		  	redirect(base_url('dashboard'));
		}else{
			echo "<script>alert('Username atau Password salah')</script>";
			echo "<script>history.go(-1);</script>";
		}

		$status =  $this->session->userdata('status');
		//echo json_encode($status);
	}

	public function logout() {
		session_unset();
		session_destroy();
		redirect(base_url());
	}
}