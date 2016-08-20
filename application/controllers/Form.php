<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{
	public function __construct(){

		parent::__construct();

	}

	public function index(){
           	
      	$_SESSION['file_type_error'] =  null;
      	$this->load->view('form');
    
	}

	public function submit(){

	    if ($this->form_validation->run() == FALSE ){

            $this->load->view('form');
         //    $errors = validation_errors();
        	// echo json_encode($errors);

        }
        else {

	    	$file_data = $this->upload_handler();
			var_dump($file_data);
	    	if($file_data == FALSE){

        		$_SESSION['file_type_error'] = 'uploaded file must be a PDF and can not be empty';
    			$this->load->view('form');

        	} else {

        		$this->load->model('Form_Model');

				$this->Form_Model->insert($file_data['full_path']);
            
           		$this->load->view('submit');
        	}

        }

	}

	public function upload_handler(){

		$config['upload_path']   = './uploads/'; 
	    $config['allowed_types'] = 'pdf'; 

	    if( $_FILES['pdf']['type'] != 'application/pdf' || $_FILES['pdf']['error'] == 4 ){
    	
    		return False;

	    } else {
	    
	    $this->load->library('upload', $config);
	   	//file upload
		$this->upload->do_upload('pdf');

	    $file_data = $this->upload->data();

	    return $file_data;
		}
	}

}