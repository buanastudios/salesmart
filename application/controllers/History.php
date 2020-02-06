<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class History extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->detail();
	}

	public function detail()		
	{			
		$d['pn'] = 'historyDetail';
		$d['data']['title'] = 'History Detail';
		$this->load->view('reg/html', $d);	
	}
}

?>