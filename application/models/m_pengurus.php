<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_pengurus extends CI_Model{
	function index(){
		$query = $this->db->get('tb_blog_pengurus');
		return $query->result();
	}
	
	// Start Edit
	function edit($id){
		$this->db->where('id_blog_p', $id);
		$query = $this->db->get('tb_blog_pengurus');
		return $query;
	}
	
	function prosesedit(){
		if($this->input->post('go_update')){
			$config['upload_path'] = 'images/';
			$config['allowed_types'] = 'jpg';
			$config['max_size'] = '500';
			$config['max_width'] = '100';
			$config['max_height'] = '123';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
				$sub_data['error'] = $this->upload->display_errors();
			}else{
				$sub_data['result'] = $this->upload->data();
			}
			
			$update_pengurus = array(
				'nama_pengurus' => $this->input->post('nama_pengurus'),
				'deskripsi_pengurus' => $this->input->post('deskripsi_pengurus'),
				'gambar_pengurus' => $_FILES['userfile']['name']
			);
			
			$id = $this->input->post('id_blog_p');
			$this->db->where('id_blog_p', $id);
			$this->db->update('tb_blog_pengurus', $update_pengurus);
		}
	}
	// End Edit
}