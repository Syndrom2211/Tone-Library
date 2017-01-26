<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_music extends CI_Model{
	function index(){
		$query = $this->db->get('tb_lib_music');
		return $query->result();
	}
	
	// Start Tambah	
	function tambah(){
		$tambah_music = array(
			"artist_music" => $this->input->post("artist_music"),
			"judul_music" => $this->input->post("judul_music"),
			"album_music" => $this->input->post("album_music"),
			"link_music" => $this->input->post("link_music"),
			"kategori_music" => $this->input->post("kategori_music"),
			"cover_kategori" => $this->input->post("cover_kategori")
		);
		
		$tambah = $this->db->insert("tb_lib_music", $tambah_music);
		return $tambah;
	}
		
	// Start Edit
	function edit($id){
		$this->db->where('id_music', $id);
		$query = $this->db->get('tb_lib_music');
		return $query;
	}
	
	function prosesedit(){
		$update_music = array(
			"artist_music" => $this->input->post("artist_music"),
			"judul_music" => $this->input->post("judul_music"),
			"album_music" => $this->input->post("album_music"),
			"link_music" => $this->input->post("link_music"),
			"kategori_music" => $this->input->post("kategori_music"),
			"cover_kategori" => $this->input->post("cover_kategori")
		);
		$id = $this->input->post('id_music');
		$this->db->where('id_music', $id);
		$this->db->update('tb_lib_music', $update_music);
	}
	// End Edit
	
	//Cari Music
	function cariMusic($cari){
		$cari = $this->db->query("SELECT * FROM tb_lib_music WHERE judul_music LIKE '%$cari%' ");
		return $cari->result();
	}
	
	// Start Hapus
	function hapus($id){
		$this->db->where("id_music", $id);
		$this->db->delete("tb_lib_music");
	}
}