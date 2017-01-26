<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_umum extends CI_Model{
	function index(){
		$query = $this->db->get('tb_website');
		return $query->result();
	}
	
	function deskripsi(){
		$query = $this->db->get('tb_deskripsi');
		return $query->result();
	}
	
	// Start Edit Pengaturan Website Judul
	function edit_wj($id){
		$this->db->where('id_web', $id);
		$query = $this->db->get('tb_website');
		return $query;
	}
	
	function prosesedit_wj(){
		$update_websitej = array(
			'judul_web' => $this->input->post('judul_web')
		);
		$id = $this->input->post('id_web');
		$this->db->where('id_web', $id);
		$this->db->update('tb_website', $update_websitej);
	}
	// End Edit Pengaturan Website Judul
	
	// Start Pengaturan Website Logo dan Gambar
	function edit_wp($id){
		$this->db->where('id_web', $id);
		$query = $this->db->get('tb_website');
		return $query;
	}
	
	function prosesedit_wp(){
		if($this->input->post('go_upload')){
			$config['upload_path'] = 'images/upl_web';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '1920';
			$config['max_height'] = '1080';
			
			$this->load->library('upload', $config);
			$result_array = array();
			
			for($i=1; $i<=2; $i++){
				if(!empty($_FILES['picture'.$i]['name'])){
					if(!$this->upload->do_upload('picture'.$i)){
						$sub_data['error'] = $this->upload->display_errors();
					}else{
						$update_websitep = array(
							'logo_web' => $_FILES['picture1']['name'],
							'bg_web' => $_FILES['picture2']['name']
						);
						$id = $this->input->post('id_web');
						$this->db->where('id_web', $id);
						$this->db->update('tb_website', $update_websitep);
						array_push($result_array, $this->upload->data());						
					}
				}
			}			
			$sub_data['result'] = $result_array;
		}
	}
	// End Pengaturan Website Logo dan Gambar
	
	// Start Edit Deskripsi Website
	function edit_d($id){
		$this->db->where('id_deskripsi', $id);
		$query = $this->db->get('tb_deskripsi');
		return $query;
	}
	
	function prosesedit_d(){
		$update_deskripsi = array(
			'deskripsi_1' => $this->input->post('deskripsi_1'),
			'deskripsi_2' => $this->input->post('deskripsi_2'),
			'deskripsi_3' => $this->input->post('deskripsi_3')
		);
		$id = $this->input->post('id_deskripsi');
		$this->db->where('id_deskripsi', $id);
		$this->db->update('tb_deskripsi', $update_deskripsi);
	}
	// End Edit Deskripsi Website
}