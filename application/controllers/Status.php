<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Status extends CI_Controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->model('Form_Model');

	}

	public function update(){
		// var_dump($this->input->post('status'));
		$this->Form_Model->status_update();
		redirect('dashboard');
	
	}

}