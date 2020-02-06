<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Store extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function index()		
	{
		$this->choose();
	}
	public function choose()		
	{
		$d['pn'] = 'store';
		$d['data']['title'] = 'Select Store';
		$this->load->view('reg/html', $d);	
	}
}

?>