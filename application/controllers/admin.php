<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Model Setting Admin
		$this->load->model("m_setting");
	}
	
	function index(){
		// Setting Admin
		$setting = $this->m_setting->index();
		$this->load->vars('s', $setting);
		
		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/home");
		$this->load->view("admin/footer");
	}
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('login/');
		}
	}	
}