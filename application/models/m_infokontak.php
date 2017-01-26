<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_infokontak extends CI_Model{
	function index(){
		$query = $this->db->get('tb_infokontak');
		return $query->result();
	}
	
	// Start Edit
	function edit($id){
		$this->db->where('id_infokontak', $id);
		$query = $this->db->get('tb_infokontak');
		return $query;
	}
	
	function prosesedit(){
		$update_infokontak = array(
			'telepon_infokontak' => $this->input->post('telepon_infokontak'),
			'alamat_infokontak' => $this->input->post('alamat_infokontak'),
			'email_infokontak' => $this->input->post('email_infokontak')
		);
		$id = $this->input->post('id_infokontak');
		$this->db->where('id_infokontak', $id);
		$this->db->update('tb_infokontak', $update_infokontak);
	}
	// End Edit
}