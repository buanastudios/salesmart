<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->lists();
	}

	public function lists()		
	{
			
		$d['pn'] = 'productList';		
		$d['data']['title'] = 'Product';
		$this->load->view('reg/html', $d);	
	}

	public function detail()		
	{			
		$d['pn'] = 'productDetail';
		$d['data']['title'] = 'Product';
		$this->load->view('reg/html', $d);	
	}
}

?>