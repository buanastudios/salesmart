<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Company extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
		
	public function index()		
	{
		$login = $this->session->userdata('login');
		if($login){
			$this->company();
		}else{
			redirect('/login');	
		}
	}

	public function company() {
		$token = $this->session->userdata('token');
		//echo $token;
		$key_signature_post=' fa77cb22d75bc218383f2ef18913ccd577301015'; //sesuaikan dengan yang ada di postman
		$key_id='302'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCompany'
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);

		//var_dump($data_api);
		
		if($data_api->error_code==0){
			$d['list_company']=$data_api->payload;
		}else{
			$d['list_company']=array();
		}

		$d['pn'] = 'companySelection';
		$d['data']['title'] = 'Select Company';
		$this->load->view('reg/html', $d);
			
	}

	public function store(){
		$company_id=$input->post('company_id');


		$token = $this->session->userdata('token');		
		//echo $token;	
		$key_signature_post= ' 00f9a08c17674b274772b42ed00f816e0accae45'; //sesuaikan dengan yang ada di postman
		$key_id='314'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCustomer',
			'company_id'	=>  $company_id
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);

	}

	public function getListCompany(){
		$token = $this->session->userdata('token');
		// echo $token;
		$key_signature_post=' fa77cb22d75bc218383f2ef18913ccd577301015'; //sesuaikan dengan yang ada di postman
		$key_id='302'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCompany'
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);

		// var_dump($data_api);
		
		if($data_api->error_code==0){
			$d['data']['list_company']=$data_api->payload;
		}else{
			$d['data']['list_company']=array();
		}	

		var_dump($d['data']['list_company']);	
	}

	
}

?>