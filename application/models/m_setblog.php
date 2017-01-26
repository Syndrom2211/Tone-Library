<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_setblog extends CI_Model{
	function index(){
		$query = $this->db->get('tb_blog_umum');
		return $query->result();
	}
	
	// Start Edit
	function edit($id){
		$this->db->where('id_blog_u', $id);
		$query = $this->db->get('tb_blog_umum');
		return $query;
	}
	
	function prosesedit(){
		if($this->input->post('go_update')){
			$config['upload_path'] = 'images/';
			$config['allowed_types'] = 'png';
			$config['max_size'] = '500';
			$config['max_width'] = '236';
			$config['max_height'] = '54';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
				$sub_data['error'] = $this->upload->display_errors();
			}else{
				$sub_data['result'] = $this->upload->data();
			}
			
			$update_setblog = array(
				'judul_blog' => $this->input->post('judul_blog'),
				'deskripsi_blog' => $this->input->post('deskripsi_blog'),
				'logo_blog' => $_FILES['userfile']['name']
			);
			
			$id = $this->input->post('id_blog_u');
			$this->db->where('id_blog_u', $id);
			$this->db->update('tb_blog_umum', $update_setblog);
		}
	}
	// End Edit
}