<?php
class Home extends Frontend_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('page_m');
		$this->load->view('frontend/frontend', $this->data);
	}

	
}