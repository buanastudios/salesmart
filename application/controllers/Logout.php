<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Logout extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index(){
	 	$this->session->set_userdata('login', FALSE);
    	session_destroy();
    
        $this->session->sess_destroy();
        redirect('/login');
    }

}

?>