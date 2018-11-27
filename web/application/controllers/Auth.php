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
}
