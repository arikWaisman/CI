<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Login_Model extends CI_Model
{

	function __construct(){

		parent::__construct();
        $this->load->database();

	}

	public function validate_user($data){ //data comes from post request
		
		$this->db->where( 'username', $data['username'] );
        $this->db->where( 'password', md5($data['password']) );
        return $this->db->get('users')->row();

	}

	public function __destruct(){
		
		$this->db->close();
	
	}

}