<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Umum extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_umum");
	}
	
	function index(){
		// Pengaturan Website
		$website = $this->m_umum->index();
		$this->load->vars('w', $website);
		
		// Deskripsi Website
		$deskripsi = $this->m_umum->deskripsi();
		$this->load->vars('d', $deskripsi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/umum/umum");
		$this->load->view("admin/footer");
	}
	
	// Start Edit Pengaturan Website Judul
	public function edit_wj($id){
		$websitej = $this->m_umum->edit_wj($id);
		$this->load->vars('w', $websitej);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view('admin/umum/form_websitej');
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_wj(){
		$this->m_umum->prosesedit_wj();
		redirect('umum');
	}
	// End Edit Pengaturan Website Judul
	
	// Start Edit Pengaturan Logo dan Gambar
	public function edit_wp($id){
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		$websitep = $this->m_umum->edit_wp($id);
		$this->load->vars('w', $websitep);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view('admin/umum/form_websitep', $sub_data);
		$this->load->view("admin/footer");
	} 
	
	public function prosesedit_wp(){
		$this->m_umum->prosesedit_wp();
		redirect('umum');
	} 
	// End Edit Pengaturan Logo dan Gambar
	
	// Start Edit Deskripsi Website
	public function edit_d($id){
		$deskripsi = $this->m_umum->edit_d($id);
		$this->load->vars('d', $deskripsi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view('admin/umum/form_deskripsi');
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_d(){
		$this->m_umum->prosesedit_d();
		redirect('umum');
	}
	// End Edit Deskripsi Website
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('login/');
		}
	}
}