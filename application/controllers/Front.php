<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('masterModel');
	}

	public function index() {
		$this->load->view('pages/landing');
	}

	public function signUp(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/regis-cust');
	}

	public function newCust(){
		$data = array(
			'idUser'		=> 0,
			'username'		=> $this->input->post('username'),
			'password'		=> md5($this->input->post('password')),
			'fullname'		=> $this->input->post('fullname'),
			'telp'			=> $this->input->post('telp'),
			'email'			=> $this->input->post('email')
		);
		$insert = $this->db->insert('user',$data);
		if($insert){
				redirect(base_url('userlogin'));
			}else{
				echo "<script>alert('Registration Failed !');</script>";
				redirect(base_url(''));
			}
	}

	public function about(){
		$data['title'] = 'About';
		$this->load->view('pages/about',$data);
	}

	public function katalog(){
		$data['title'] = 'Katalog Part';
		$data['content'] = $this->masterModel->listing('part');
		$this->load->view('pages/katalog',$data);
	}

	
}