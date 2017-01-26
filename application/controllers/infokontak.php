<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Infokontak extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_infokontak");
	}
	
	function index(){
		$infokontak = $this->m_infokontak->index();
		$this->load->vars('kn', $infokontak);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/infokontak/infokontak");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		$infokontak = $this->m_infokontak->edit($id);
		$this->load->vars('kn', $infokontak);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view('admin/infokontak/form_infokontak');
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_infokontak->prosesedit();
		redirect('infokontak');
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