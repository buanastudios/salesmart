<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	protected $global = array();
    
    function __construct() {
        parent::__construct();        
        // echo BASEPATH;
	}


	public function index(){
		$login = $this->session->userdata('login');
		if($login){
			$is_fromcustselection = $this->input->post("customerandstoreselection");
			// echo $is_fromcustselection;

			if($is_fromcustselection){
			    // echo "<pre>from selection</pre>";
				$from_post_company_id 		=	$this->input->post('company_id');
				$from_post_company_name		=	$this->input->post('company_name');
				$from_post_customer_id		=	$this->input->post('customer_id');
				$from_post_user_id 			=	$this->input->post('user_id');
				$from_post_referrer_url		=	$this->input->post('referer_url');
				// echo "<pre>".$from_post_referrer_url."</pre>";

				if(strlen($from_post_company_id)>0){
					$this->session->set_userdata('company_id',$from_post_company_id);
				}

				if(strlen($from_post_company_name)>0){				
					$this->session->set_userdata('company_name',$from_post_company_name);
				}

				if(strlen($from_post_customer_id)>0){
					$this->session->set_userdata('customer_id', $from_post_customer_id);
				}

				if(strlen($from_post_user_id)>0){					
					$this->session->set_userdata('user_id',$from_post_user_id);
				}

				if(strlen($from_post_referrer_url)>0){					
					redirect($from_post_referrer_url,'refresh');
				}else{
					$this->landing();
				}

			}else{
				// echo "<pre>just-refresh-or-redirected</pre>";
				$this->landing();
			}
		 	 	
		}else{

			redirect('/login');
			
		}
	}

	public function landing(){
			$d['list_company']				=	$this->getListOfCompany();
			$d['list_store']				=	$this->getListOfStore();
			$d['list_promo_banner']			=	$this->getListPromoBanner();
			$d['list_products']				=	$this->getListOfProduct();
			$d['list_product_category']		=	$this->getListProductCategory();
			$d['logged_user_properties']	=	$this->getUserProperties();
			
			$d['pn']						=	'landing';
			$d['data']['title']				=	'Landing Page';
			$this->load->view('reg/html', $d);
	}			
/*	public function original()			
	{
		$d['pn'] = 'landing';
		$d['data']['title'] = 'Landing Page';
		$this->load->view('reg/html', $d);	
	}*/
	
	// public function test(){
	//     echo "exp: ".$this->session->sess_expiration."<br/>";
 //        echo "having login: ".$this->session->has_userdata('login')."|".$this->session->userdata('login')."<br/>";
 //        echo "having fname: ".$this->session->has_userdata('full_name')."|".$this->session->userdata('full_name')."<br/>";
	// }

		/*$this->session->set_userdata('login', FALSE);
    	session_destroy();
    
        $this->session->sess_destroy();
		*/
	
		// $this->session->sess_expiration = 10; 	
  //       echo "exp: ".$this->session->sess_expiration."<br/>";
  //       echo "having login: ".$this->session->has_userdata('login')."|".$this->session->userdata('login')."<br/>";
  //       echo "having fname: ".$this->session->has_userdata('full_name')."|".$this->session->userdata('full_name')."<br/>";

		// $login = $this->session->userdata('login');
		// var_dump($login);
		// if($login){
		// 	echo "dianggap true";
		// }else{
		// 	echo "dianggap false";
		// }

		// echo "<br/>";
		// if(isset($login)){
		// 	echo "dianggap isset true";
		// }else{
		// 	echo "dianggap isset false";
		// }

		// echo "<br/>";

		// $fname = $this->session->userdata('full_name');
		// var_dump($fname);
		// if(isset($fname)){
		// 	echo "fname dianggap isset true";
		// }else{
		// 	echo "fname dianggap isset false";
		// }		
		// exit();

	public function getUserProperties(){
		$token 				=	$this->session->userdata('token');
		$company_id			= 	$this->session->userdata('company_id');
		$user_id 			=	$this->session->userdata("user_id");

		$key_signature_post	=	'942ee76703db63b51907a7b3cfc7bebcf39eb5d5'; //sesuaikan dengan yang ada di postman
		$key_id				=	'310'; // sesuaikan dengan yang ada di postman

		$post_data = array(
			"method"		=>	'getProdGrp',
			"user"			=>	$user_id,
			"page"			=>	'1',
			"offset"		=>	'5'
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

	public function getListProductCategory(){
		$token				=	$this->session->userdata('token');
		$company_id 		=	$this->session->userdata('company_id');
		$user_id 			=	$this->session->userdata("user_id");

		$key_signature_post	=	'942ee76703db63b51907a7b3cfc7bebcf39eb5d5'; //sesuaikan dengan yang ada di postman
		$key_id				=	'310'; // sesuaikan dengan yang ada di postman

		$begotten = [];
		array_push($begotten, $token, $company_id, $user_id);


		$post_data = array(
			"method"		=>	'getProdGrp',
			"user"			=>	$user_id,
			"page"			=>	'1',
			"offset"		=>	'5'
		);

		$url 				=	URL_API;
		$res_api			=	$this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id,$token);
		$data_api			=	json_decode($res_api);

		if($data_api->error_code==0){
			$data=$data_api->payload;
		}else{
			$data=array();
		}
		// var_dump($begotten);
		// var_dump($data);
		return $data;
	}

	public function getListPromoBanner(){
		$token 				=	$this->session->userdata('token');
		$company_id 		=	$this->session->userdata('company_id');
		$user_id 			=	$this->session->userdata("user_id");
		$key_signature_post	=	"cff339bb14a27d6d8416448cc2321cdd74955a17"; //sesuaikan dengan yang ada di postman
		$key_id				=	"309"; // sesuaikan dengan yang ada di postman

		$begotten = [];
		array_push($begotten, $token, $company_id, $user_id);

		$post_data = array(
			"method"		=>	"getBannerCust",
			"user"			=>	$user_id,
			"page"			=>	"1",
			"offset"		=>	"5"
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
			// $data=$data_api->message;
			$data=array();
		}
		// var_dump($data);
		return $data;
	}

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
