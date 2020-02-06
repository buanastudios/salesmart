<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cart extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->none();
	}

	public function none()		
	{
		$d['pn'] = 'cartEmpty';
		$d['data']['title'] = 'Cart';
		$this->load->view('reg/html', $d);	
	}
	public function ordered()		
	{
		$d['pn'] = 'cartOrdered';
		$d['data']['title'] = 'Cart';
		$this->load->view('reg/html', $d);	
	}




}

?>