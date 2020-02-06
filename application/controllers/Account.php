<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->profile();	
	}

	public function profile(){
		$d['pn'] = 'accountProfile';		
		$d['data']['title'] = 'Profile';
		$this->load->view('reg/html', $d);	
	}
}

?>