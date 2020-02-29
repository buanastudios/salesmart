<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Highlight extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function index(){
		$login = $this->session->userdata('login');
		if($login){
			$is_fromcustselection = $this->input->post("customerandstoreselection");

			if($is_fromcustselection){
				$from_post_customer_id		=	$this->input->post('customer_id');	
				$from_post_referrer_url		=	$this->input->post('referer_url');

				if(strlen($from_post_customer_id)>0){
					$this->session->set_userdata('customer_id', $from_post_customer_id);
				}

				if(strlen($from_post_referrer_url)>0){					
					redirect($from_post_referrer_url,'refresh');
				}else{
					$this->hotProducts();
				}

			}else{
				$this->hotProducts();
			}
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function favorite(){
		$login = $this->session->userdata('login');
		if($login){
			$is_fromcustselection = $this->input->post("customerandstoreselection");
			echo "<pre>".$is_fromcustselection."</pre>";
			if($is_fromcustselection && ($is_fromcustselection=="true") && (strlen($is_fromcustselection)>0)){
				$from_post_customer_id		=	$this->input->post('customer_id');	
				$from_post_referrer_url		=	$this->input->post('referer_url');

				if(strlen($from_post_customer_id)>0){
					$this->session->set_userdata('customer_id', $from_post_customer_id);
				}

				if(strlen($from_post_referrer_url)>0){	
					redirect($from_post_referrer_url,'refresh');
				}else{
					$this->favProducts();
				}

			}else{
				$this->favProducts();
			}
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function hotProducts(){	
		$login = $this->session->userdata('login');
		if($login){

			$d['list_company']				=	$this->getListOfCompany();
			$d['list_store']				=	$this->getListOfStore();
			$d['list_products']				=	$this->getListOfProduct();

			$d['pn'] = 'highlightHotProducts';		
			$d['data']['title'] = 'Hot Products';
			$this->load->view('reg/html', $d);	
		}else{
			redirect('/login','refresh');
		}
	}

	public function newProducts(){
		$login = $this->session->userdata('login');
		if($login){
			$d['list_company']				=	$this->getListOfCompany();
			$d['list_store']				=	$this->getListOfStore();
			$d['list_products']				=	$this->getListOfProduct();

		$d['pn'] = 'highlightNewProducts';		
		$d['data']['title'] = 'New Products';
		$this->load->view('reg/html', $d);	
		}else{
			redirect('/login','refresh');
		}
	}

	public function favProducts(){
		$login = $this->session->userdata('login');
		if($login){
			$d['list_company']				=	$this->getListOfCompany();
			$d['list_store']				=	$this->getListOfStore();
			$d['list_products']				=	$this->getListOfFavoriteProduct();
			
			$d['pn'] = 'highlightFavorite';		
			$d['data']['title'] = 'Favorite';
			$this->load->view('reg/html', $d);
		}else{
			redirect('/login');
		}	
	}

	public function orderProducts(){
			
		$d['pn'] = 'highlightOrder';		
		$d['data']['title'] = 'Order';
		$this->load->view('reg/html', $d);	
	}

	public function getListOfFavoriteProduct(){
		$token				= $this->session->userdata('token');
		$user_id 			= $this->session->userdata("user_id");

		$key_signature_post	= "63ce8127e9b1ff4f842ed48a70433c2219d116d4"; //sesuaikan dengan yang ada di postman
		$key_id 			= "321"; // sesuaikan dengan yang ada di postman

		$begotten = [];
		array_push($begotten, $token, $user_id);

		$post_data = array(
			"method"		=> "getFavProdList",
			"user"			=> $user_id,
			"page"			=> "1",
			"offset"		=> "5"
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);
		// var_dump($data_api);
		// var_dump($post_data);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=$data_api->message;
			// $data=array();
		}
		// var_dump($data);
		return $data;
	}

	public function getListOfProduct(){
		$token				= $this->session->userdata('token');
		$company_id 		= $this->session->userdata('company_id');
		$user_id 			= $this->session->userdata("user_id");

		$key_signature_post	= "344dbc63b6864e43140248a7be6e363058385dba"; //sesuaikan dengan yang ada di postman
		$key_id 			= "311"; // sesuaikan dengan yang ada di postman

		$begotten = [];
		array_push($begotten, $token, $company_id, $user_id);

		$post_data = array(
			"method"		=> "getProdList",
			"user"			=> $user_id,
			"order"			=> "asc",
			"sort"			=> "price",
			"page"			=> "1",
			"offset"		=> "5"
		);

		$url = URL_API;
		$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api = json_decode($res_api);
		// var_dump($data_api);
		// var_dump($post_data);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=$data_api->message;
			// $data=array();
		}
		// var_dump($data);
		return $data;
	}

//While you can use the native PHP $_SERVER['HTTP_REFERER'] predefined variable, there is a CI version as well.
// Once you have loaded the User Agent class, all you need to do is run $this->agent->referrer() and you will be returned a string containing the referring URL, or an empty string if there is no referrer

	public function getListOfStore(){
		$token				=	$this->session->userdata('token');
		$company_id 		=	$this->session->userdata('company_id');
		//echo $token;
		$key_signature_post	=	"00f9a08c17674b274772b42ed00f816e0accae45"; //sesuaikan dengan yang ada di postman
		$key_id				=	'314'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=> 'getListCustomer',
			'company_id'	=>  $company_id
		);


		$begotten = [];
		array_push($begotten, $token, $company_id);

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
