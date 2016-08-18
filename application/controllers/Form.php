<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); 
		$this->load->helper('form');
		$this->load->view('Form');
	}

	public function submit()
	{

		$this->load->helper('url'); 
		$this->load->view('submit');

	}

}
