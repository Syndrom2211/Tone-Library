<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Error extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		// Load Model
		$this->load->model("m_umum");
		$this->load->model("m_infokontak");
	}
	
	function index(){				
		// Pengaturan Website
		$website = $this->m_umum->index();
		$this->load->vars('w', $website);
		
		// Info Kontak
		$infokontak = $this->m_infokontak->index();
		$this->load->vars('kn', $infokontak);
		
		$this->load->view('header');
		$this->load->view('error');
		$this->load->view('footer');
	}
}