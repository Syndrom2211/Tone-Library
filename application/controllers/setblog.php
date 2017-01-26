<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setblog extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_setblog");
	}
	
	function index(){
		// Setting Blog
		$setblog = $this->m_setblog->index();
		$this->load->vars('sb', $setblog);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/umum/umum");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		// Setting Blog
		$setblog = $this->m_setblog->edit($id);
		$this->load->vars('sb', $setblog);
		
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view('admin/blog/umum/form_umum', $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_setblog->prosesedit();
		redirect('setblog');
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