<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Form_Model extends CI_Model
{
	public $status;
	public $first_name;
	public $last_name;
	public $address_1;
	public $address_2;
	public $city;
	public $state;
	public $zipcode;
	public $phone;
	public $email;
	public $company_name;
	public $company_address;
	public $company_city;
	public $company_state;
	public $company_zipcode;
	public $company_phone;
	public $pdf_path;

	public function __construct(){
		
		parent::__construct();
	
	}

	public function insert($file_name){
		
		$this->status			= 0;
		$this->first_name		= $this->input->post('first_name');
		$this->last_name		= $this->input->post('last_name');
		$this->address_1		= $this->input->post('address_1');
		$this->address_2		= $this->input->post('address_2') ? $this->input->post('address_2') : 'N/A' ;
		$this->city				= $this->input->post('city');
		$this->state			= $this->input->post('state');
		$this->zipcode			= $this->input->post('zipcode');
		$this->phone			= $this->input->post('phone');
		$this->email			= $this->input->post('email');
		$this->company_name		= $this->input->post('company_name');
		$this->company_address	= $this->input->post('company_address');
		$this->company_city		= $this->input->post('company_city');
		$this->company_state	= $this->input->post('company_state');
		$this->company_zipcode	= $this->input->post('company_zipcode');
		$this->company_phone	= $this->input->post('company_phone');
		$this->pdf_path			= base_url() . 'uploads/' . $file_name;

		$this->db->insert( 'forms', $this->db->escape($this) );
	
	}

	public function get_status_where($status_code){

		$query = $this->db->get_where('forms', ['status' => $status_code]); 
		if($query->num_rows() > 0){
			return $query->result();
		}
		return [];

	}

	public function status_update(){

		$update_value = [ 'status' => $this->input->post('status') ];

		$this->db->where( 'id', $this->input->post('user_id') );

		$this->db->update( 'forms', $update_value );
	
	}

}

