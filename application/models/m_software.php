<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_software extends CI_Model{
	function index(){
		$query = $this->db->get('tb_software');
		return $query->result();
	}
		
	// Start Edit
	function edit($id){
		$this->db->where('id_software', $id);
		$query = $this->db->get('tb_software');
		return $query;
	}
		
	function prosesedit(){
		if($this->input->post('go_update')){
			$config['upload_path'] = 'images/daw/';
			$config['allowed_types'] = 'png';
			$config['max_size'] = '500';
			$config['max_width'] = '512';
			$config['max_height'] = '512';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
				$sub_data['error'] = $this->upload->display_errors();
			}else{
				$sub_data['result'] = $this->upload->data();
			}
			
			$update_software = array(
				'judul_software' => $this->input->post('judul_software'),
				'penjelasan_software' => $this->input->post('penjelasan_software'),
				'nama_software' => $this->input->post('nama_software'),
				'deskripsi_software1' => $this->input->post('deskripsi_software1'),
				'deskripsi_software2' => $this->input->post('deskripsi_software2'),
				'gambar_software' => $_FILES['userfile']['name'],
				'nama_id' => $this->input->post('nama_id')
			);
			
			$id = $this->input->post('id_software');
			$this->db->where('id_software', $id);
			$this->db->update('tb_software', $update_software);
		}
	}
	// End Edit
}