<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setting extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_setting");
	}
	
	function index(){
		// Setting 
		$setting = $this->m_setting->index();
		$this->load->vars('s', $setting);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/setting/setting");
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		// Setting 
		$setting = $this->m_setting->edit($id);
		$this->load->vars('s', $setting);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/setting/form_setting");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_setting->prosesedit();
		redirect('setting');
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