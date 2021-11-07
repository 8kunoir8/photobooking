<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->model('masterModel');
		if($this->session->userdata('idUser')==NULL){
			redirect(base_url(''));
		}
	}

	public function index(){
		$param = array(
			'idUser'	=> $this->session->userdata('idUser')
		);
		//$data['content'] = $this->masterModel->one($param,'perbaikan');
		$this->load->view('consul/navbar');
		$this->load->view('consul/info-cust');
	}

	public function inputRusak(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/input-rusak');
	}

	public function subConsul(){
		$idUser = $this->session->userdata('idUser');
		$insertData = array(
				'idConsul'		=> 0,
				'idUser' 		=> $idUser,
				'fileKerusakan' => $this->upKerusakan(),
				'idJenis'		=> $this->input->post('jenis'),
				'idRusak'		=> $this->input->post('rusak'),
				'ket'			=> $this->input->post('ket')
			);
			$insert = $this->masterModel->insert($insertData,'consul');
			if($insert){
				redirect(base_url('userboard'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('userboard'));
			}
	}

	public function estimasi(){
		$param = array(
			'idUser'	=> $this->session->userdata('idUser')
		);
		$data['title']	= 'Estimasi Perbaikan';
		$data['content'] = $this->masterModel->one($param,'consul');
		$this->load->view('consul/navbar');
		$this->load->view('consul/estimasi',$data);
	}

	public function pesanPart(){
		//$param = array(
		//	'idUser'	=> $this->session->userdata('idUser')
		//);
		$data = array(
			"user" => "user"
		);
		//$data['title']	= 'Pesan Spare Part';
		//$data['content'] = $this->masterModel->one($param,'consul');
		$this->load->view('consul/navbar');
		$this->load->view('consul/pesan-part',$data);
	}

	public function subPesan(){
		$idUser = $this->session->userdata('idUser');
		$harga = $this->db->get_where("type_part",array("id_type"=>$this->input->post('type_part')))->row()->harga;
		$count = $this->db->get("order_sparepart")->num_rows();
		$insertData = array(
				'id_orderpart'	=> 0,
				'idUser' 		=> $idUser,
				'id_catpart' 	=> $this->input->post('jenis_part'),
				'id_type'		=> $this->input->post('type_part'),
				'qty'			=> $this->input->post('jumlah_pesanan'),
				'harga_satuan'	=> $harga,
				'harga_total'	=> $harga * $this->input->post('jumlah_pesanan'),
				'transaksi'		=> $this->input->post('transaksi'),
				'order_sta'		=> "Di Pesan",
				'c_date'		=> DATE("Y-m-d")
			);
			$insert = $this->masterModel->insert($insertData,'order_sparepart');
			if($insert){
				redirect(base_url('userboard'));
				//redirect(base_url('user/confirmPesan/').$count+1);
				//echo "<script>window.location='".base_url('')."user/confirmPesan/".$count+1."';</script>";
			}else{
				echo "<script>alert('Input Order Failed !');</script>";
				redirect(base_url('userboard'));
			}
	}

	public function confirmPesan(){
		$id_orderpart = $this->uri->segment(3);
		$data = array(
			"user" => "user"
		);
		$data['order'] = $this->db->get_where("order_sparepart",array("id_orderpart"=>$id_orderpart))->row();
		$this->load->view('consul/navbar');
		$this->load->view('consul/conf-pesan',$data);
	}

	public function confPesan(){

	}

	public function ajukanPerbaikan(){
		$this->load->view('consul/navbar');
		$this->load->view('consul/ajukan-perbaikan');
	}

	public function subPerbaikan(){
		$idUser = $this->session->userdata('idUser');
		$insertData = array(
				'idPerbaikan'	=> 0,
				'idUser' 		=> $idUser,
				'idConsul' 		=> $this->input->post('konsul'),
				'pelayanan'		=> $this->input->post('pelayanan'),
				'pengerjaan'	=> $this->input->post('pengerjaan'),
				'alamat'		=> $this->input->post('alamat'),
				'ket'			=> $this->input->post('ket')
			);
			$insert = $this->masterModel->insert($insertData,'perbaikan');
			if($insert){
				redirect(base_url('userboard'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('userboard'));
			}
	}

	public function upKerusakan(){
			$config['upload_path']              = './uploads/kerusakan/';
		    $config['allowed_types']       		= 'gif|jpg|png|jpeg|GIF|JPG|JPEG|PNG|pdf|PDF';
			$config['max_size']         		= 2048;
			$config['encrypt_name'] 			= TRUE;

	        $this->upload->initialize($config);
	        if($this->upload->do_upload('fileKerusakan')){
	        	return $this->upload->data('file_name');
	        }else{
	        	echo $this->upload->display_errors();
	        }

	}

	public function resize($path,$file){
		$config['image_library']='GD2';
		$config['source_image'] = $path;
		$config['maintain_ratio'] = TRUE;
		$config['create_thumb'] = FALSE;
		$config['width'] = 975;
		$config['height'] = 550;
		$config['quality'] = 20;
		$config["image_sizes"]["square"] = array(1158, 550);
		$this->load->library('image_lib', $config);
		$this->image_lib->fit();
	}

	
}