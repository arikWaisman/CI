<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->model('Form_Model');


		if ( empty( $this->session->userdata('user_id') ) ){

			$this->session->set_flashdata('flash_data', 'You must be logged in to view admin dashboard');
			redirect('login');

		}
	
	}

	public function index(){
		
		$result['need_action']	= $this->Form_Model->get_status_where(0); 
		$result['approved']		= $this->Form_Model->get_status_where(1); 
		$result['denied']		= $this->Form_Model->get_status_where(2); 

		$this->load->view('dashboard', $result);
	
	}

	public function logout(){
		
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		redirect('login');

	}

}