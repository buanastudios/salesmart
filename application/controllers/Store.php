<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Store extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function index(){
		//$this->choose();
		$login = $this->session->userdata('login');
		if($login){
			$company_id=$this->input->post('company_id');
			$company_name=$this->input->post('company_name');

			$token = $this->session->userdata('token');
			//echo $token;
			$key_signature_post=' 00f9a08c17674b274772b42ed00f816e0accae45'; //sesuaikan dengan yang ada di postman
			$key_id='314'; // sesuaikan dengan yang ada di postman

			$post_data = array(
				"method"		=> 'getListCustomer',
				'company_id'	=>  $company_id
			);

			$url = URL_API;
			$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
			$data_api = json_decode($res_api);

			if($data_api->error_code==0){
				$d['list_store']=$data_api->payload;
			}else{
				$d['list_store']=array();
			}
			// var_dump($data_api);
			$d['referer_url'] = $this->input->post('referer_url');
			$d['pn'] = 'storeSelection';
			$d['company_id']=$company_id;
			$d['company_name']=$company_name;
			$d['data']['title'] = 'Select Store';

			$this->load->view('reg/html', $d);
		}else{
			redirect('/login');
		}
		
	}

	public function getList($company_id){

		$token = $this->session->userdata('token');
		//echo $token;
		$key_signature_post=' 00f9a08c17674b274772b42ed00f816e0accae45'; //sesuaikan dengan yang ada di postman
		$key_id='314'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCustomer',
			'company_id'	=>  $company_id
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);

		if($data_api->error_code==0){
			$d['list_store']=$data_api->payload;
		}else{
			$d['list_store']=array();
		}
		var_dump($d);
		return $d;
	}
	
}

?>