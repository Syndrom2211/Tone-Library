<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Libmusic extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_music");
		$this->load->model("m_libkategori");
		
		// Kategori Lib Music
		$kategori = $this->m_libkategori->index();
		$this->load->vars('k', $kategori);
	}
	
	function index(){			
		$sub_data = '';
		
		// Pagination Tags
		$config['base_url'] = base_url('libmusic/index');
		$config['total_rows'] = $this->db->count_all('tb_lib_music');
		$config['per_page'] = '5';
		
		$this->pagination->initialize($config);
		$offset = $this->uri->segment(3);
		
		$this->db->order_by("id_music", "desc");
		$query = $this->db->get('tb_lib_music', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End of Pagination
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/libmusic/libmusic", $sub_data);
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		$music = $this->m_music->edit($id);
		$this->load->vars('mc', $music);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/libmusic/form_music_edit");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_music->prosesedit();
		redirect('libmusic');
	}
	// End Edit
	
	// Start Tambah
	public function tambah(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/libmusic/form_music_tambah");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah(){
		$this->m_music->tambah();
		redirect('libmusic');
	}
	// End Tambah
	
	// Start Hapus
	function hapus($id){
		$this->m_music->hapus($id);
		redirect('libmusic');
	}
	// End Hapus
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('login/');
		}
	}
}