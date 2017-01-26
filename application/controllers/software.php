<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Software extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_software");
	}
	
	function index(){
		// Software
		$software = $this->m_software->index();
		$this->load->vars('s', $software);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/software/software");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		// Software
		$software = $this->m_software->edit($id);
		$this->load->vars('s', $software);
		
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/software/form_software", $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_software->prosesedit();
		redirect('software');
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