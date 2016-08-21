<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{
	public function __construct(){

		parent::__construct();
		$this->load->model('Form_Model');

	}

	public function index(){
			
		$_SESSION['file_type_error'] =  null;
		$this->load->view('form');
	
	}

	public function submit(){

		if ($this->form_validation->run() == FALSE ){

			$this->load->view('form');

		}
		else {

			$file_data = $this->upload_handler();
			if($file_data == FALSE){

				$_SESSION['file_type_error'] = 'uploaded file must be a PDF and can not be empty';
				$this->load->view('form');

			} else {

				$this->Form_Model->insert($file_data['orig_name']);
				$this->load->view('submit');

			}

		}

	}

	public function upload_handler(){

		if( $_FILES['pdf']['type'] != 'application/pdf' || $_FILES['pdf']['error'] == 4 ){
		
			return FALSE;

		} else {

			$config['upload_path']   = './uploads/'; 
			$config['allowed_types'] = 'pdf'; 
			$this->load->library('upload', $config);

			//add time stamp to file name
			$_FILES['pdf']['name'] = time() . '_' . $_FILES['pdf']['name'];

			//file upload
			$this->upload->do_upload('pdf');

			$file_data = $this->upload->data();
			return $file_data;
		
		}
	}

}
