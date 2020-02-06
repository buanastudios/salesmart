<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Promo extends CI_Controller {


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
			
		$d['pn'] = 'promoList';		
		$d['data']['title'] = 'Promo';
		$this->load->view('reg/html', $d);	
	}

	public function detail()		
	{			
		$d['pn'] = 'promoDetail';
		$d['data']['title'] = 'Promo';
		$this->load->view('reg/html', $d);	
	}

	public function detail2()		
	{			
		$d['pn'] = 'promoDetail2';
		$d['data']['title'] = 'Promo';
		$this->load->view('reg/html', $d);	
	}
}

?>