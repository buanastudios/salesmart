<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Company extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$d['pn'] = 'company';
		$d['data']['title'] = 'Select Company';
		$this->load->view('reg/html', $d);	
	}
}

?>