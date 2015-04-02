<?php
    class Dashboard extends Admin_Controller{
        
        public function __construct(){
            parent::__construct();
//            $this->load->model('user');
//            $this->user->isloggedin();
        }
        public function index() {
			$this->load->helper('url');
			//$this->data['subview']='admin/dashboard/index';
            $this->load->view('admin/layout_dashboard');
            
        }
        public function modal() {
			$this->load->helper('url');
            $this->load->view('admin/_layout_modal', $this->data);
            
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

