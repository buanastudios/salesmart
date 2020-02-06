<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Chat extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->conversation();	
	}

	public function conversation(){
		$d['pn'] = 'chat';		
		$d['data']['title'] = 'Chat';
		$this->load->view('reg/html', $d);	
	}
}

?>