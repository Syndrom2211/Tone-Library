<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tags extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		
		// Load Model
		$this->load->model("m_tags");
	}
	
	function index(){			
		$sub_data = '';
		
		// Pagination Tags
		$config['base_url'] = base_url('tags/index');
		$config['total_rows'] = $this->db->count_all('tb_blog_tags');
		$config['per_page'] = '5';
		
		$this->pagination->initialize($config);
		$offset = $this->uri->segment(3);
		
		$this->db->order_by("id_blog_t", "desc");
		$query = $this->db->get('tb_blog_tags', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End of Pagination
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/tags/tags", $sub_data);
		$this->load->view("admin/footer");
	}
	
	// Start Edit
	public function edit($id){
		$tags = $this->m_tags->edit($id);
		$this->load->vars('tg', $tags);
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/tags/form_tags_edit");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_tags->prosesedit();
		redirect('tags');
	}
	// End Edit
	
	// Start Tambah
	public function tambah(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/tags/form_tags_tambah");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah(){
		$this->m_tags->tambah();
		redirect('tags');
	}
	// End Tambah
	
	// Start Hapus
	function hapus($id){
		$this->m_tags->hapus($id);
		redirect('tags');
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