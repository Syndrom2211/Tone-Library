<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_libkategori extends CI_Model{
	function index(){
		$query = $this->db->get('tb_lib_kategori');
		return $query->result();
	}
	
	// Start Edit
	function edit($id){
		$this->db->where('id_kategori', $id);
		$query = $this->db->get('tb_lib_kategori');
		return $query;
	}
		
	function prosesedit(){
		if($this->input->post('go_update')){
			$config['upload_path'] = 'images/portfolio/';
			$config['allowed_types'] = 'jpg';
			$config['max_size'] = '500';
			$config['max_width'] = '650';
			$config['max_height'] = '418';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
				$sub_data['error'] = $this->upload->display_errors();
			}else{
				$sub_data['result'] = $this->upload->data();
			}
			
			$update_libkategori = array(
				'nama_kategori' => $this->input->post('nama_kategori'),
				'gambar_kategori' => $_FILES['userfile']['name']
			);
		
			$id = $this->input->post('id_kategori');
			$this->db->where('id_kategori', $id);
			$this->db->update('tb_lib_kategori', $update_libkategori);
		}
	}
	// End Edit
}