<?php 

class Layout {
	var $CI;
	public function __construct() {
		$this->CI =& get_instance();
	}
	public function defaultPage($page,$data = NULL,$content = NULL) {
		$this->CI->load->view('load/sidebar',$content);
		$this->CI->load->view('load/navbar');
		$this->CI->load->view($page,$data);
		$this->CI->load->view('load/footer');
	}
}
