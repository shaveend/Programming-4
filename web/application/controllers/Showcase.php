<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showcase extends CI_Controller {

	public function index()
	{
		$this->load->view('showroomMain');
	}
}
