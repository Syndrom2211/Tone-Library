<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Libkategori extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_libkategori");
	}
	
	function index(){
		$kategori = $this->m_libkategori->index();
		$this->load->vars('k', $kategori);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/libkategori/libkategori");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		$libkategori = $this->m_libkategori->edit($id);
		$this->load->vars('k', $libkategori);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/libkategori/form_libkategori", $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_libkategori->prosesedit();
		redirect('libkategori');
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