<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$d['pn'] = 'login';
		$d['data']['title'] = 'Sign In';
		$this->load->view('reg/html', $d);	
	}
}

?>