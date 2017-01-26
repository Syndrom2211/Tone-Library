<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{

	//error_reporting(0);

	function __construct(){
		parent::__construct();

		// Load Model
		$this->load->model("m_setblog");
		$this->load->model('m_login');
	}

	function index(){
		// Setting Blog
		$setblog = $this->m_setblog->index();
		$this->load->vars('sb', $setblog);

		$this->load->view("header");
		$this->load->view("admin/login");
		$this->load->view("footer");
	}

	// Proses Login
	function aksi(){
		$query = $this->m_login->validasi();

		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('admin/');
		}else{
			$this->data['pesan'] = 'Username atau Password salah wahai admin !';
			$this->load->view("header");
			$this->load->view("admin/login", $this->data);
			$this->load->view("footer");
		}
	}
	// End Proses Login

	// Start Logout
	function logout(){
		$this->session->sess_destroy();
		redirect('login/');
	}
	// End Logout
}
