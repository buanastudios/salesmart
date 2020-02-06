<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pin extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->input();
	}

	public function input()
	{
		$d['pn'] = 'pinInput';
		$d['data']['title'] = 'Input PIN Code';
		$this->load->view('reg/html', $d);	
	}

	public function create()
	{
		$d['pn'] = 'pinCreate';
		$d['data']['title'] = 'Create PIN Code';
		$this->load->view('reg/html', $d);	
	}
}

?>