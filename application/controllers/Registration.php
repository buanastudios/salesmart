<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	protected $global = array();
    

	// public function index()
	// {
	// 	$this->load->view('registration');
	// }


	// Load Model
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('user_model');
	}
		
	public function index()		
	{
		$d['pn'] = 'registration';
		$d['title'] = 'Pendaftaran';
		$this->load->view('reg/html', $d);	
	}


}


