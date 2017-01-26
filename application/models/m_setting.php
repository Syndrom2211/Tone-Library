<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_setting extends CI_Model{
	function index(){
		$query = $this->db->get('tb_admin');
		return $query->result();
	}
	
	// Start Edit
	function edit($id){
		$this->db->where('id_admin', $id);
		$query = $this->db->get('tb_admin');
		return $query;
	}
		
	function prosesedit(){
		$update_setting = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$id = $this->input->post('id_admin');
		$this->db->where('id_admin', $id);
		$this->db->update('tb_admin', $update_setting);
	}
	// End Edit
}