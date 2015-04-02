<?php


	/**
	* 
	*/
	class model_adduser extends CI_Model
	{
		
		public function doAddUser()
		{
		$data = array(
		"name" => $this->input->post('name'),
		"email" => $this->input->post('email'),
		"password" => $this->input->post('password'),
		
		);
		$this->db->insert('users',$data);
		redirect('./admin/user/add/'.$id.'/sukses');
		}
		
	}
?>