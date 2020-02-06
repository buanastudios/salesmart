<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

class Landing extends CI_Controller {

	protected $global = array();
    
    function __construct() {
        parent::__construct();        
        // echo BASEPATH;
	}

	public function index()			
	{
		$d['pn'] = 'landing';
		$d['data']['title'] = 'Landing Page';
		$this->load->view('reg/html', $d);	
	}
}
