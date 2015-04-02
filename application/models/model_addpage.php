<?php


	/**
	* 
	*/
	class model_addpage extends CI_Model
	{
		
		public function doAddPage()
		{
		$data = array(
		
		"title" => $this->input->post('title'),
		"slug" => $this->input->post('slug'),
		"body" => $this->input->post('body'),
		"order" => $this->input->post('order'),
		"parent_id" => $this->input->post('parent_id'),
		
		);
		$this->db->insert('pages',$data);
		redirect('./admin/pages/add/'.$id.'/sukses');
		}
		
	}
?>