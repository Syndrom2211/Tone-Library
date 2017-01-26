<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tentang extends CI_Model{
	function index(){
		$query = $this->db->get('tb_tentang');
		return $query->result();
	}
		
	// Start Edit
	function edit($id){
		$this->db->where('id_ttg', $id);
		$query = $this->db->get('tb_tentang');
		return $query;
	}
		
	function prosesedit(){
		if($this->input->post('go_update')){
			$config['upload_path'] = 'images/team/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '500';
			$config['max_width'] = '370';
			$config['max_height'] = '450';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
				$sub_data['error'] = $this->upload->display_errors();
			}else{
				$sub_data['result'] = $this->upload->data();
			}
			
			$update_tentang = array(
				'nama_ttg' => $this->input->post('nama_ttg'),
				'deskripsi_ttg' => $this->input->post('deskripsi_ttg'),
				'motto_ttg' => $this->input->post('motto_ttg'),
				'gambar_ttg' => $_FILES['userfile']['name'],
				'link_fb_ttg' => $this->input->post('link_fb_ttg'),
				'link_twitter_ttg' => $this->input->post('link_twitter_ttg')
			);
			
			$id = $this->input->post('id_ttg');
			$this->db->where('id_ttg', $id);
			$this->db->update('tb_tentang', $update_tentang);
		}
	}
	// End Edit
}