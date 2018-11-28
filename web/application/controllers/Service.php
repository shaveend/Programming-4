<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function index()
	{
		$this->load->view('service');
	}

	public function loadBookService(){
		if (isset($_SESSION['cid']) == FALSE){
			$this->session->set_flashdata('msg','Please Login!!!');
			redirect('Auth/login');
		}else{
			$this->load->view('serviceReq');
		}
	}
}
