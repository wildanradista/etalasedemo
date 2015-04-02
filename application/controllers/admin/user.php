<?php
class User extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{
		// Fetch all users
		$this->data['users'] = $this->user_m->get();
		
		// Load view
		$this->data['subview'] = 'admin/user/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function editUser($idUser){
	}

	public function add (){

		$this->data['subview'] = 'admin/user/add';
		$this->load->view('admin/_layout_main', $this->data);
		$this->load->model('model_adduser');
		if($this->input->post('submit')){
			$this->model_adduser->doAddUser();
		}
	}

	public function edit ($id = null)
	{
		$this->data['id_user'] = $id;
		// Fetch a user or set a new one
		if ($id) {
			$this->data['user'] = $this->user_m->get($id);
			count($this->data['user']) || $this->data['errors'][] = 'User could not be found';
		}
		else {
			$this->data['user'] = $this->user_m->get_new();
		}
		
		// Load the view
		$this->data['subview'] = 'admin/user/edit';
		$this->load->view('admin/_layout_main', $this->data);
		$this->load->model('model_edituser');
		if($this->input->post('submit')){
			$this->model_edituser->doEditUser($id);
		} 
	}

	public function delete ($id)
	{
		$this->user_m->delete($id);
		redirect('admin/user');
	}

	public function login ()
	{	
	
	// Redirect a user if he's already logged in
		$dashboard = 'admin/dashboard';
		$this->user_m->loggedin() == FALSE || redirect($dashboard);
		
		
		$rules= $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->user_m->login() == TRUE) {
				redirect($dashboard);
			}
			else {
				$this->session->set_flashdata('error', 'That email/password combination does not exist');
				redirect('admin/user/login', 'refresh');
			}
		}
		$this->data['subview'] = 'admin/user/login';
		$this->load->view('admin/_layout_modal', $this->data);
			
	}
	public function logout ()
	{
		$this->user_m->logout();
		redirect('admin/user/login');
	}
	public function _unique_email ($str)
	{
		// Do NOT validate if email already exists
		// UNLESS it's the email for the current user
		
		$id = $this->uri->segment(4);
		$this->db->where('email', $this->input->post('email'));
		!$id || $this->db->where('id !=', $id);
		$user = $this->user_m->get();
		
		if (count($user)) {
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}

}