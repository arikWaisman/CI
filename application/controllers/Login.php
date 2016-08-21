<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->model('Login_Model');
		if( !empty($_SESSION['user_id'])){
			redirect('dashboard');
		}

	}

	public function index(){
		if($_POST){
			
			$result = $this->Login_Model->validate_user($_POST);
			if( !empty($result) ){
				
				$_SESSION['user_id'] 	= $result->user_id;
				$_SESSION['username'] 	= $result->username;
				
				redirect('dashboard');

			} else {

				$this->session->set_flashdata('flash_data', 'Username or password didnt match');
				redirect('login');

			}

		}

		$this->load->view('login');
	
	}

}