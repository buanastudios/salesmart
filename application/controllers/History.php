<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class History extends CI_Controller {
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function index(){
		$login = $this->session->userdata('login');
		if(!$login){
			redirect('/login','refresh');
		}else{
			$this->transactions();
		}
	}

	public function detail(){
		$login = $this->session->userdata('login');
		if(!$login){
			redirect('/login','refresh');
		}else{
			$from_post_order_id		=	$this->input->post('order_id');		
			if(strlen($from_post_order_id)>0){
				$this->transactiondetail($from_post_order_id);
			}else{
				redirect('/history','refresh');	
			}
		}	
	}

	public function transactions(){		
		//PAGE SPESIFIC	
		$d['list_transcation'] 			=	$this->getListTrxHistory();

		//CONTENT FOOTER
		$d['list_company']				=	$this->getListOfCompany();
		$d['list_store']				=	$this->getListOfStore();

		$d['pn'] 						=	'historyTransaction';
		$d['data']['title']				=	'History Transcation';
		$this->load->view('reg/html', $d);	
	}

	public function transactiondetail($order_id){			
		//PAGE SPESIFIC	
		$d['list_transaction'] 			=	$this->getListTrxHistoryDetail($order_id);

		//CONTENT FOOTER
		$d['list_company']				=	$this->getListOfCompany();
		$d['list_store']				=	$this->getListOfStore();
		
		$d['pn'] = 'historyTransactionDetail';
		$d['data']['title'] = 'History Detail';
		$this->load->view('reg/html', $d);	
	}

	public function getListTrxHistory(){
		$token				=	$this->session->userdata('token');
		$user_id			=	$this->session->userdata('user_id');
		$key_signature_post	=	'683db151d5d916df58752d3be42ce5b77bfc25ef'; //sesuaikan dengan yang ada di postman
		$key_id				=	'317'; // sesuaikan dengan yang ada di postman
		
		$begotten = [];
		array_push($begotten, $token, $user_id);

		$post_data = array(
			"method"		=> 	'getHistoryList',
			"user"			=>	$user_id,
			"page"			=>	'1',
			"offset"		=>	'5'
		);

		$url 				= 	URL_API;
		$res_api 			= 	$this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api 			=	json_decode($res_api);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=array();
		}

		// var_dump($begotten);
		// var_dump($data);
		return $data;
	}

	public function getListTrxHistoryDetail($order_id){
		$token				=	$this->session->userdata('token');
		$user_id			=	$this->session->userdata('user_id');
		$key_signature_post	=	'2c346d2d17f4439ffd86e9eac43ab65e10d913d1'; //sesuaikan dengan yang ada di postman
		$key_id				=	'318'; // sesuaikan dengan yang ada di postman
		//$order_id 			=	 "ODR/20200117/01/20/000000003"; //SAMPLE

		$post_data = array(
			"method"		=> 	'getHistoryDetail',
			"user"			=>	$user_id,
			"order_id"		=> 	$order_id
		);

		$url 				= 	URL_API;
		$res_api 			= 	$this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api 			=	json_decode($res_api);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=array();
		}
		
		return $data;
	}

	public function getListOfStore(){
		$company_id 		=	$this->session->userdata('company_id');
		$token				=	$this->session->userdata('token');
		//echo $token;
		$key_signature_post	=	' 00f9a08c17674b274772b42ed00f816e0accae45'; //sesuaikan dengan yang ada di postman
		$key_id				=	'314'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCustomer',
			'company_id'	=>  $company_id
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=array();
		}
		return $data;
	}

	public function getListOfCompany(){
		$token				=	$this->session->userdata('token');
		$key_signature_post=' fa77cb22d75bc218383f2ef18913ccd577301015'; //sesuaikan dengan yang ada di postman
		$key_id='302'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCompany'
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=array();
		}
		return $data;
	}
}

?>