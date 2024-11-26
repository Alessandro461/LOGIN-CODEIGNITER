<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function dashboard() {
        $this->load->view('admin/dashboard');
    }
    public function add_user() {
 	$this->auth_model->register_user(); 
	$this->session->set_flashdata('suc', 'Usuario agregado correctamente.'); 
	redirect('admin/dashboard'); 
	} 
    public function view_users() { 
	$data['users'] = $this->auth_model->get_all_users(); 
	$this->load->view('admin/view_users', $data); 
	}
}
