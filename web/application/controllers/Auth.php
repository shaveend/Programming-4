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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{
			$this->load->model('MUser');
			$response = $this->MUser->userLogin();
			if ($response == FALSE){
				$this->session->set_flashdata('msg','Invalid Login... Please try Again!!!');
				redirect('Auth/login');
			}else{
				$sessionData = array(
					'cid' => $response->cid,
					'name' =>$response->name,
					'phonenumber' => $response->phonenumber,
					'email' => $response->email,
					'loggedin' => TRUE,
				);

				$this->session->set_userdata($sessionData);
				$this->session->set_flashdata('msg','Welcome Back!!!');
				redirect('Welcome/index');
			}
		}
	}

	public function userRegister(){
		$this->form_validation->set_rules('name', 'First Name', 'required');
		$this->form_validation->set_rules('tp', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customer.email]');
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
