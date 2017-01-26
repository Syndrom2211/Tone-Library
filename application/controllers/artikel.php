<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Artikel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_artikel");
		$this->load->model("m_tags");
		
		// Tags Blog
		$tags = $this->m_tags->index();
		$this->load->vars('tg', $tags);
	}
	
	function index(){			
		$sub_data = '';
		
		//Pagination Artikel
		$config['base_url'] = base_url('artikel/index');
		$config['total_rows'] = $this->db->count_all('tb_blog_artikel');
		$config['per_page'] = '5';
		
		$this->pagination->initialize($config);
		$offset = $this->uri->segment(3);
		
		$this->db->order_by("id_blog_a", "desc");
		$query = $this->db->get('tb_blog_artikel', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End of pagination
		
		// View List Artikel
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/artikel/artikel", $sub_data);
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){		
		$artikel = $this->m_artikel->edit($id);
		$this->load->vars('at', $artikel);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/artikel/form_artikel_edit");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_artikel->prosesedit();
		redirect('artikel');
	}
	// End Edit
	
	//Start Tambah
	public function tambah(){		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/artikel/form_artikel_tambah");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah(){
		$this->m_artikel->tambah();
		redirect('artikel');
	}
	// End Tambah
	
	// Start Hapus
	function hapus($id){
		$this->m_artikel->hapus($id);
		redirect('artikel');
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