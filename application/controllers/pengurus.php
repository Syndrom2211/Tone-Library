<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pengurus extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_pengurus");
	}
	
	function index(){
		// Pengurus
		$pengurus = $this->m_pengurus->index();
		$this->load->vars('p', $pengurus);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/pengurus/pengurus");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		// Pengurus
		$pengurus = $this->m_pengurus->edit($id);
		$this->load->vars('p', $pengurus);
		
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view('admin/blog/pengurus/form_pengurus', $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_pengurus->prosesedit();
		redirect('pengurus');
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