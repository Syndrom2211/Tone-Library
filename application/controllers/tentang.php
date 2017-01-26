<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tentang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_tentang");
	}
	
	function index(){
		// Tentang
		$tentang = $this->m_tentang->index();
		$this->load->vars('t', $tentang);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/tentang/tentang");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		// Tentang
		$tentang = $this->m_tentang->edit($id);
		$this->load->vars('t', $tentang);
		
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/tentang/form_tentang", $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_tentang->prosesedit();
		redirect('tentang');
	}
	// End Edit
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('login/');
		}
	}
}