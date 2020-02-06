<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Highlight extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->hotProducts();
	}

	public function hotProducts(){
			
		$d['pn'] = 'highlightHotProducts';		
		$d['data']['title'] = 'Hot Products';
		$this->load->view('reg/html', $d);	
	}

	public function newProducts(){
			
		$d['pn'] = 'highlightNewProducts';		
		$d['data']['title'] = 'New Products';
		$this->load->view('reg/html', $d);	
	}

	public function favproducts(){
			
		$d['pn'] = 'highlightFavorite';		
		$d['data']['title'] = 'Favorite';
		$this->load->view('reg/html', $d);	
	}

	public function orderProducts(){
			
		$d['pn'] = 'highlightOrder';		
		$d['data']['title'] = 'Order';
		$this->load->view('reg/html', $d);	
	}
}

?>