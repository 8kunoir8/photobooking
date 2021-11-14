<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('Layout');
		$this->load->library('upload');
		$this->load->model('masterModel');
		if($this->session->userdata('nama') =='' || $this->session->userdata('nama') == NULL){
			redirect(base_url('login'));
		}
	}

	public function index() {
		$this->layout->defaultPage('pages/dashboard');
	}

	//ADMIN

	public function authAdmin(){
		$content['title'] = 'Admin Authorization';
		$data['content'] = $this->masterModel->listing('admin');
		$this->layout->defaultPage('pages/auth-admin',$data,$content);
	}

	public function newAdmin(){
		$insertData = array(
				'idAdmin' => 0,
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'level'	=> $this->input->post('level')
			);
			$insert = $this->masterModel->insert($insertData,'admin');
			if($insert){
				redirect(base_url('admin'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('admin'));
			}
	}

	public function editAdmin(){
		$updateData = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'level'	=> $this->input->post('level')
		);
		$id = array(
			'idAdmin' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'admin',$id);
		if($update){
				redirect(base_url('admin'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('admin'));
			}
	}

	public function deleteAdmin(){
		$id = array(
			'idAdmin' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('admin',$id);
		if($delete){
				redirect(base_url('admin'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('admin'));
			}
	}

//USER

	public function authUser(){
		$content['title'] = 'User Authorization';
		$data['content'] = $this->masterModel->listing('pelanggan');
		$this->layout->defaultPage('pages/auth-user',$data,$content);
	}

	public function newUser(){
		$insertData = array(
				'id_pelanggan' => 0,
				'nama' => $this->input->post('nama'),
				'kata_sandi' => md5($this->input->post('kata_sandi')),
				'alamat' => $this->input->post('alamat'),
				'no_hp'	=> $this->input->post('no_hp')
			);
			$insert = $this->masterModel->insert($insertData,'user');
			if($insert){
				redirect(base_url('user'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('user'));
			}
	}

	public function editUser(){
		$updateData = array(
			'nama' => $this->input->post('nama'),
			'kata_sandi' => md5($this->input->post('kata_sandi')),
			'alamat' => $this->input->post('alamat'),
			'no_hp'	=> $this->input->post('no_hp')
		);
		$id = array(
			'id_pelanggan' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'pelanggan',$id);
		if($update){
				redirect(base_url('user'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('user'));
			}
	}

	public function deleteUser(){
		$id = array(
			'id_pelanggan' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('pelanggan',$id);
		if($delete){
				redirect(base_url('user'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('user'));
			}
	}


	//SUPPLIER

	public function masterSupplier(){
		$content['title'] = 'Master Supplier';
		$data['content'] = $this->masterModel->listing('supplier');
		$this->layout->defaultPage('pages/master-supplier',$data,$content);
	}

	public function newSupplier(){
		$insertData = array(
				'idSupplier' => 0,
				'namaSupplier' => $this->input->post('name'),
				'alamatSupplier' => $this->input->post('address')
			);
			$insert = $this->masterModel->insert($insertData,'supplier');
			if($insert){
				redirect(base_url('supplier'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('supplier'));
			}
	}

	public function editSupplier(){
		$updateData = array(
			'namaSupplier' => $this->input->post('name'),
			'alamatSupplier' => $this->input->post('address')
		);
		$id = array(
			'idSupplier' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'supplier',$id);
		if($update){
				redirect(base_url('supplier'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('supplier'));
			}
	}

	public function deleteSupplier(){
		$id = array(
			'idSupplier' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('supplier',$id);
		if($delete){
				redirect(base_url('supplier'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('supplier'));
			}
	}

	//CATEGORY

	public function masterCategory(){
		$content['title'] = 'Master Category';
		$data['content'] = $this->masterModel->listing('category');
		$this->layout->defaultPage('pages/master-category',$data,$content);
	}
	
	public function newCategory(){
		$insertData = array(
				'idCategory' => 0,
				'namaCategory' => $this->input->post('name'),
				'keterangan' => $this->input->post('keterangan')
			);
			$insert = $this->masterModel->insert($insertData,'category');
			if($insert){
				redirect(base_url('category'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('category'));
			}
	}

	public function editCategory(){
		$updateData = array(
			'namaCategory' => $this->input->post('name'),
			'keterangan' => $this->input->post('keterangan')
		);
		$id = array(
			'idCategory' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'category',$id);
		if($update){
				redirect(base_url('category'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('category'));
			}
	}

	public function deleteCategory(){
		$id = array(
			'idCategory' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('category',$id);
		if($delete){
				redirect(base_url('category'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('category'));
			}
	}

	

	//KERUSAKAN
	public function masterRusak(){
		$content['title'] = 'Master Kerusakan';
		$data['content'] = $this->masterModel->listing('rusak');
		$this->layout->defaultPage('pages/master-rusak',$data,$content);
	}
	
	public function newRusak(){
		$insertData = array(
				'idRusak' => 0,
				'rangeBiaya'	=> $this->input->post('biaya'),
				'namaRusak' => $this->input->post('name'),
				'ketRusak' => $this->input->post('keterangan')
			);
			$insert = $this->masterModel->insert($insertData,'rusak');
			if($insert){
				redirect(base_url('rusak'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('rusak'));
			}
	}

	public function editRusak(){
		$updateData = array(
			'rangeBiaya'	=> $this->input->post('rangeBiaya'),
			'namaRusak' => $this->input->post('biaya'),
			'ketRusak' => $this->input->post('keterangan')
		);
		$id = array(
			'idRusak' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'rusak',$id);
		if($update){
				redirect(base_url('rusak'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('rusak'));
			}
	}

	public function deleteRusak(){
		$id = array(
			'idRusak' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('rusak',$id);
		if($delete){
				redirect(base_url('rusak'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('rusak'));
			}
	}

	//JENIS
	public function masterJenis(){
		$content['title'] = 'Master Jenis';
		$data['content'] = $this->masterModel->listing('jenis');
		$this->layout->defaultPage('pages/master-jenis',$data,$content);
	}
	
	public function newJenis(){
		
		$insertData = array(
				'idJenis' => 0,
				'picJenis'	=> $this->upFotoJenis(),
				'namaJenis' => $this->input->post('name'),
				'catJenis'	=> $this->input->post('cat'),
				'ketJenis' => $this->input->post('keterangan')
			);
			$insert = $this->masterModel->insert($insertData,'jenis');
			if($insert){
				redirect(base_url('jenis'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('jenis'));
			}
	}

	public function editJenis(){

		$updateData = array(
			'picJenis'	=> $this->upFotoJenis(),
			'namaJenis' => $this->input->post('name'),
			'catJenis'	=> $this->input->post('cat'),
			'ketJenis' => $this->input->post('keterangan')
		);
		$id = array(
			'idJenis' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'jenis',$id);
		if($update){
				redirect(base_url('jenis'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('jenis'));
			}
	}

	public function deleteJenis(){
		$id = array(
			'idJenis' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('jenis',$id);
		if($delete){
				redirect(base_url('jenis'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('jenis'));
			}
	}

	public function upFotoJenis(){
			$config['upload_path']              = './uploads/fotojenis/';
		    $config['allowed_types']       		= 'gif|jpg|png|jpeg|GIF|JPG|JPEG|PNG|pdf|PDF';
			$config['max_size']         		= 2048;
			$config['encrypt_name'] 			= TRUE;

	        $this->upload->initialize($config);
	        if($this->upload->do_upload('fotoJenis')){
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

	//Order Part
	public function orderpart(){
		$content['title'] = 'Daftar Pesanan';
		$data['content'] = $this->masterModel->listing('order_sparepart');
		$this->layout->defaultPage('pages/order-part',$data,$content);
	}

	public function orderDone(){
		$updateData = array(
				'order_sta' => 'Done',
				'end_date' => date('Y-m-d')
		);
		$id = array(
			'id_orderpart' => $this->uri->segment(3)
		);
		$update = $this->masterModel->edit($updateData,'order_sparepart',$id);
		if($update){
				redirect(base_url('order'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('order'));
			}
	}


	//PART
	public function masterPart(){
		$content['title'] = 'Master Part';
		$data['content'] = $this->masterModel->listing('part');
		$this->layout->defaultPage('pages/master-part',$data,$content);
	}

	public function newPart(){
		$insertData = array(
				'idPart' => 0,
				'idJenis' => $this->input->post('jenis'),
				'namaPart' => $this->input->post('name'),
				'harga' => $this->input->post('harga')
			);
			$insert = $this->masterModel->insert($insertData,'part');
			if($insert){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	public function editPart(){
		$updateData = array(
				'idJenis' => $this->input->post('jenis'),
				'namaPart' => $this->input->post('name'),
				'harga' => $this->input->post('price')
		);
		$id = array(
			'idPart' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'part',$id);
		if($update){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	public function deletePart(){
		$id = array(
			'idPart' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('part',$id);
		if($delete){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	//Category Part
	public function masterCatPart(){
		$content['title'] = 'Jenis Part';
		$data['content'] = $this->masterModel->listing('category_part');
		$this->layout->defaultPage('pages/category-part',$data,$content);
	}

	public function newCatPart(){
		$insertData = array(
				'id_catpart' => 0,
				'nm_catpart' => $this->input->post('name'),
				'ket_catpart' => $this->input->post('ket')
			);
			$insert = $this->masterModel->insert($insertData,'category_part');
			if($insert){
				redirect(base_url('catpart'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('catpart'));
			}
	}

	public function editCatPart(){
		$updateData = array(
				'nm_catpart' => $this->input->post('name'),
				'ket_catpart' => $this->input->post('ket')
		);
		$id = array(
			'id_catpart' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'category_part',$id);
		if($update){
				redirect(base_url('catpart'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('catpart'));
			}
	}

	public function deleteCatPart(){
		$id = array(
			'id_catpart' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('category_part',$id);
		if($delete){
				redirect(base_url('catpart'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('catpart'));
			}
	}
	//Type Part
	public function masterType(){
		$content['title'] = 'Type Part';
		$data['content'] = $this->masterModel->listing('type_part');
		$this->layout->defaultPage('pages/type-part',$data,$content);
	}

	public function newType(){
		$insertData = array(
				'id_type' => 0,
				'id_catpart' => $this->input->post('catpart'),
				'nm_type' => $this->input->post('name'),
				'harga' => $this->input->post('harga'),
				'stock' => $this->input->post('stock'),
				'ket_type' => $this->input->post('ket')
			);
			$insert = $this->masterModel->insert($insertData,'type_part');
			if($insert){
				redirect(base_url('type'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('type'));
			}
	}

	public function editType(){
		$updateData = array(
				'id_catpart' => $this->input->post('catpart'),
				'nm_type' => $this->input->post('name'),
				'harga' => $this->input->post('harga'),
				'stock' => $this->input->post('stock'),
				'ket_type' => $this->input->post('ket')
		);
		$id = array(
			'id_type' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'type_part',$id);
		if($update){
				redirect(base_url('type'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('type'));
			}
	}

	public function deleteType(){
		$id = array(
			'id_type' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('type_part',$id);
		if($delete){
				redirect(base_url('type'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('type'));
			}
	}

	//ESTIMASI
	public function masterEstimasi(){
		$content['title'] = 'Transaksi Estimasi';
		$data['content'] = $this->masterModel->listing('consul');
		$this->layout->defaultPage('pages/trans-estimasi',$data,$content);
	}

	public function estimasi(){
		$updateData = array(
				'analisa' => $this->input->post('analisa'),
				'esBiaya' => $this->input->post('esBiaya'),
				'esWaktu' => $this->input->post('esWaktu')
		);
		$id = array(
			'idconsul' => $this->uri->segment(3)
		);
		$update = $this->masterModel->edit($updateData,'consul',$id);
		if($update){
				redirect(base_url('Home/masterEstimasi'));
			}else{
				echo "<script>alert('Estimasi Failed !');</script>";
				redirect(base_url('Home/masterEstimasi'));
			}
	}

	//PERBAIKAN
	public function masterPerbaikan(){
		$content['title'] = 'Transaksi Perbaikan';
		$data['content'] = $this->masterModel->listing('perbaikan');
		$this->layout->defaultPage('pages/trans-perbaikan',$data,$content);
	}

	public function newPerbaikan(){
		$insertData = array(
				'idPart' => 0,
				'idJenis' => $this->input->post('jenis'),
				'namaPart' => $this->input->post('name'),
				'harga' => $this->input->post('harga')
			);
			$insert = $this->masterModel->insert($insertData,'part');
			if($insert){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Insert Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	public function editPerbaikan(){
		$updateData = array(
				'idJenis' => $this->input->post('jenis'),
				'namaPart' => $this->input->post('name'),
				'harga' => $this->input->post('price')
		);
		$id = array(
			'idPart' => $this->uri->segment(2)
		);
		$update = $this->masterModel->edit($updateData,'part',$id);
		if($update){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('part'));
			}
	}

	public function perAccept(){
		$updateData = array(
				'status' => 'Diterima',
				'startDate' => date('Y-m-d')
		);
		$id = array(
			'idPerbaikan' => $this->uri->segment(3)
		);
		$update = $this->masterModel->edit($updateData,'perbaikan',$id);
		if($update){
				redirect(base_url('Home/masterPerbaikan'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('Home/masterPerbaikan'));
			}
	}

	public function perFinish(){
		$updateData = array(
				'status' => 'Selesai',
				'endDate' => date('Y-m-d')
		);
		$id = array(
			'idPerbaikan' => $this->uri->segment(3)
		);
		$update = $this->masterModel->edit($updateData,'perbaikan',$id);
		if($update){
				redirect(base_url('Home/masterPerbaikan'));
			}else{
				echo "<script>alert('Update Failed !');</script>";
				redirect(base_url('Home/masterPerbaikan'));
			}
	}



	public function deletePerbaikan(){
		$id = array(
			'idPart' => $this->uri->segment(2)
		);
		$delete = $this->db->delete('part',$id);
		if($delete){
				redirect(base_url('part'));
			}else{
				echo "<script>alert('Delete Failed !');</script>";
				redirect(base_url('part'));
			}
	}
	
	//REPORT

	public function reportPerbaikan(){
		$content['title'] = 'Laporan Data Perbaikan';
		$param = array(
			'status'	=> 'Selesai'
		);
		$data['content'] = $this->masterModel->one($param,'perbaikan');
		$this->layout->defaultPage('pages/rep-perbaikan',$data,$content);
	}
}
