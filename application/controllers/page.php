<?php
Class Page extends Frontend_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('page_m');
        }
        
        public function index(){
//           $pages = $this->page_m->get_by(array('slug' => 'about'));
//           var_dump($pages);
        } 
//        public function save() {
//            $data = array(
//                'order' => '3',
//            $data = array(
//                'title' => 'My Page',
//                'slug' => 'my-page',
//                'order' => '2',
//                'body' => 'Opo rekkkk'
//            );
//            $id = $this->page_m->save($data, 3);
//            $id = $this->page_m->save($data);
//            var_dump($id);
//        } 
//        public function delete() {
//            $this->page_m->delete(3);
//        }
} 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

