<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 /*public function _construct()
	 {
	 	parent::_construct();
		$this->load->helper('url');
	}*/
	public function index()
	{
		$this->load->view('main');
	}

	public function serv()
	{
		$this->load->view('service');
	}

	public function show()
	{
		$this->load->view('showroom');
	}

	public function admin()
	{
		$this->load->view('makeadmin');
	}

	public function con()
	{
		$this->load->view('contact');
	}
	
}