<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("auth");
        $this->load->model("master_model");
		$this->load->library('form_validation');
	}

	public function index(){
    	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
    		'required' => 'Email Tidak Boleh Kosong',
    		'valid_email' => 'Format Email tidak Valid'
    	]);

    	$this->form_validation->set_rules('password', 'Password', 'required|trim', [
    		'required' => 'Password Tidak Boleh Kosong'
    	]);

    	if ($this->form_validation->run() == false) {
            $data["master"] = $this->master_model->getAll();
    		$this->load->view('login', $data);
    	}else{
        	$login = $this->auth;  
            $login->login();
        }
	}
}