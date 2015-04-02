<?php
class model_edituser extends CI_Model {
	public function index(){

	}

	public function doEditUser($id){
	$data = array(
		"email" => $this->input->post('email'),
		"password" => $this->input->post('password'),
		"name" => $this->input->post('name')
	);
	$this->db->where('id',$id);
	$this->db->update('users',$data);
	redirect('./admin/user/edit/'.$id.'');
	}

}
?>