<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Komentar extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		// Load Model
		$this->load->model("m_komentar");
	}
	
	function index(){			
		$sub_data = '';
		
		//Pagination Komentar
		$config['base_url'] = base_url('komentar/index');
		$config['total_rows'] = $this->db->count_all('tb_blog_komentar');
		$config['per_page'] = '5';
		
		$this->pagination->initialize($config);
		$offset = $this->uri->segment(3);
		
		$this->db->order_by("id_blog_k", "desc");
		$query = $this->db->get('tb_blog_komentar', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End of pagination 
				
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/blog/komentar/komentar", $sub_data);
		$this->load->view("admin/footer");
	}
	
	// Start Hapus
	function hapus($id){
		$this->m_komentar->hapus($id);
		redirect('komentar');
	}
	// End Hapus
	
	// Tambah Komentar Artikel
	public function prosestambah(){	
		$this->m_komentar->tambah();
		redirect("page/blog");
	}
	// End Tambah Komentar Artikel
}