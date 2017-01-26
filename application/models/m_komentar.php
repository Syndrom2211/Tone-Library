<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_komentar extends CI_Model{
	function index($id){
		$this->db->where('id_blog_a', $id);
		$this->db->order_by('id_blog_k', "desc");
		$query = $this->db->get('tb_blog_komentar');
		return $query->result();
	}	
	
	// Start Tambah	
	function tambah(){
		$tambah_komentar = array(
			"id_blog_a" => $this->input->post("id_blog_a"),
			"nama_komentar" => $this->input->post("nama_komentar"),
			"email_komentar" => $this->input->post("email_komentar"),
			"pesan_komentar" => $this->input->post("pesan_komentar")
		);
		
		$tambah = $this->db->insert("tb_blog_komentar", $tambah_komentar);
		return $tambah;
	}
	// End Tambah
	
	// Start Hapus
	function hapus($id){
		$this->db->where("id_blog_k", $id);
		$this->db->delete("tb_blog_komentar");
	}
	// End Hapus
}