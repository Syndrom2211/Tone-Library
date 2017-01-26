<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tags extends CI_Model{
	function index(){
		$query = $this->db->get('tb_blog_tags');
		return $query->result();
	}	
	
	// Start Tambah	
	function tambah(){
		$tambah_tags = array(
			"nama_tags" => $this->input->post("nama_tags")
		);
		
		$tambah = $this->db->insert("tb_blog_tags", $tambah_tags);
		return $tambah;
	}
		
	// Start Edit
	function edit($id){
		$this->db->where('id_blog_t', $id);
		$query = $this->db->get('tb_blog_tags');
		return $query;
	}
	
	function prosesedit(){
		$update_tags = array(
			'nama_tags' => $this->input->post('nama_tags')
		);
		$id = $this->input->post('id_blog_t');
		$this->db->where('id_blog_t', $id);
		$this->db->update('tb_blog_tags', $update_tags);
	}
	// End Edit
	
	// Start Hapus
	function hapus($id){
		$this->db->where("id_blog_t", $id);
		$this->db->delete("tb_blog_tags");
	}
}