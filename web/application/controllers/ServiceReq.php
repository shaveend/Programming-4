<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceReq extends CI_Controller {

	

	public function confirmBookService(){
		
		//$this->form_validation->set_rules('servicetype', 'Service Type', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		
		if ($this->form_validation->run() == FALSE)
	    {
				$this->load->view('serviceReq');
	    }
	    else
	    {
			$this->load->model('AddReq');
	    	$response = $this->AddReq->addrequest();
				if ($response){
					$this->session->set_flashdata('msg','Succesful');
					
					redirect('');
				}else{
					$this->session->set_flashdata('msg','Something went Wrong!!!');
					//$this->load->view('main');
					redirect('');
				}
		}
	    
	}
	
}
