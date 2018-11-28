<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function registration()
	{
		$this->load->view('registration');
	}

	public function login(){
		$this->load->view('login');
	}

	public function userLogin(){
		$this->load->view('registration');
	}

	public function userRegister(){
		$this->form_validation->set_rules('name', 'First Name', 'required');
		$this->form_validation->set_rules('tp', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm', 'Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
	    {
				$this->load->view('registration');
	    }
	    else
	    {
				$this->load->model('MUser');
	    	$response = $this->MUser->addUser();
				if ($response){
					$this->session->set_flashdata('msg','Registered Susseccfully... Please Login');
					redirect('Auth/login');
				}else{
					$this->session->set_flashdata('msg','Something went Wrong!!!');
					redirect('Auth/registration');
				}
	    }
	}
}
