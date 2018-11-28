<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function contact()
	{
		$this->load->view('Contact');
	}

	public function about(){
		  $this->load->view('showroomMain');
		}

  public function submitContact(){
    $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('tp', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('discription', 'Discription', 'required');

		if ($this->form_validation->run() == FALSE)
	    {
				$this->load->view('Contact');
	    }
	    else
	    {
				$this->load->model('MContact');
	    	$response = $this->MContact->submitContact();
				if ($response){
					$this->session->set_flashdata('msg','Your Message has been send Succesfully!');
					redirect('Welcome/index');
				}else{
					$this->session->set_flashdata('msg','Something went Wrong!!!');
					redirect('Info/contact');
				}
	    }
  }

}
