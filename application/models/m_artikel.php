<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_artikel extends CI_Model{
	function index(){
		$this->db->limit(6);
		$this->db->order_by("id_blog_a", "desc");
		$query = $this->db->get('tb_blog_artikel');
		return $query->result();
	}
	
	// Tambah Data	
	function tambah(){
		$tambah_artikel = array(
			"judul_artikel" => $this->input->post("judul_artikel"),
			"tgl_artikel" => $this->input->post("tgl_artikel"),
			"kategori_artikel" => $this->input->post("kategori_artikel"),
			"isi_artikel" => $this->input->post("isi_artikel"),
			"penulis_artikel" => $this->input->post("penulis_artikel")
		);
		
		$tambah = $this->db->insert("tb_blog_artikel", $tambah_artikel);
		return $tambah;
	}
	
	//Cari Artikel
	function cariArtikel($cari){
		$cari = $this->db->query("SELECT * FROM tb_blog_artikel WHERE judul_artikel LIKE '%$cari%' ");
		return $cari->result();
	}
	
	// Tampil Artikel
	function tampil($id){
		$this->db->where('id_blog_a', $id);
		$query = $this->db->get('tb_blog_artikel');
		return $query;
	}
		
	// Start Edit
	function edit($id){
		$this->db->order_by("id_blog_a", "desc");
		$query = $this->db->get('tb_blog_artikel');
		return $query;
	}
	
	function prosesedit(){
		$update_artikel = array(
			'judul_artikel' => $this->input->post('judul_artikel'),
			'tgl_artikel' => $this->input->post('tgl_artikel'),
			'kategori_artikel' => $this->input->post('kategori_artikel'),
			'isi_artikel' => $this->input->post('isi_artikel'),
			'penulis_artikel' => $this->input->post('penulis_artikel'),
		);
		$id = $this->input->post('id_blog_a');
		$this->db->where('id_blog_a', $id);
		$this->db->update('tb_blog_artikel', $update_artikel);
	}
	// End Edit
	
	// Start Hapus
	function hapus($id){
		$this->db->where("id_blog_a", $id);
		$this->db->delete("tb_blog_artikel");
	}
	// End Hapus
}