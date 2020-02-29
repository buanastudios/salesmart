<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account extends CI_Controller {


	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index()		
	{
		$this->profile();	
	}

	public function profile(){
		$login = $this->session->userdata('login');
		if($login){
			$d['list_company']				=	$this->getListOfCompany();
			$d['list_store']				=	$this->getListOfStore();
			$d['list_user_info']			=	$this->getListOfUserInfo();

			$d['pn'] = 'accountProfile';		
			$d['data']['title'] = 'Account Profile';
			$this->load->view('reg/html', $d);	
		}else{
			redirect('/login','refresh');
		}
	}

	public function settings(){
		$d['pn'] = 'accountSetting';		
		$d['data']['title'] = 'Setting';
		$this->load->view('reg/html', $d);		
	}

	public function changePassword($a,$b,$c){
		$token				=	$this->session->userdata('token');
		$key_signature_post	=	"c2538d3127da94add289513759cb25b05668caaf";
		$key_id				=	'305';
		$post_data = array(
			"method"			=> 'postChangePassword',
			'old_password'		=>  $a,
			'new_password'		=>  $b,
			're_new_password'	=>  $c
		);

		$begotten = [];
		array_push($begotten, $token, $method);

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

	public function changePhoto($newPhoto){
		$token				=	$this->session->userdata('token');
		$key_signature_post	=	"2dbe091ad8c0b099742e457103f7e014ae310493";
		$key_id				=	'324';
		$post_data = array(
			"method"			=> 'EditUserInfo',
			'photo'		=>  $newPhoto
		);

		$begotten = [];
		array_push($begotten, $token, $method);

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

	public function changeFullName($newFullName){
		$token				=	$this->session->userdata('token');
		$key_signature_post	=	"2dbe091ad8c0b099742e457103f7e014ae310493";
		$key_id				=	'324';
		$post_data = array(
			"method"			=> 'EditUserInfo',
			'full_name'		=>  $newFullName
		);

		$begotten = [];
		array_push($begotten, $token, $method);

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

	public function changeSexGender($newSexGender){
		$token				=	$this->session->userdata('token');
		$key_signature_post	=	"2dbe091ad8c0b099742e457103f7e014ae310493";
		$key_id				=	'324';
		$post_data = array(
			"method"			=> 'EditUserInfo',
			'jenis_kelamin'		=>  $newSexGender
		);

		$begotten = [];
		array_push($begotten, $token, $method);

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

	public function changeBirthDay($newBirthDay){
		$token				=	$this->session->userdata('token');
		$key_signature_post	=	"2dbe091ad8c0b099742e457103f7e014ae310493";
		$key_id				=	'324';
		$post_data = array(
			"method"		=> 'EditUserInfo',
			'birthday'			=>  $newBirthDay
		);

		$begotten = [];
		array_push($begotten, $token, $method);

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

	public function changeMobilePhoneNumber($newMobilePhoneNumber){
		$token				=	$this->session->userdata('token');
		$key_signature_post	=	"2dbe091ad8c0b099742e457103f7e014ae310493";
		$key_id				=	'324';
		$post_data = array(
			"method"		=> 'EditUserInfo',
			'no_hp'			=>  $newMobilePhoneNumber
		);

		$begotten = [];
		array_push($begotten, $token, $method);

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
	
	public function getListOfUserInfo(){
		$token				= $this->session->userdata('token');
		$company_id 		= $this->session->userdata('company_id');
		$user_id 			= $this->session->userdata("user_id");

		$key_signature_post	= "d54127b91eb1c834691ea3788fb4dd8013c4e8f3"; //sesuaikan dengan yang ada di postman
		$key_id 			= "323"; // sesuaikan dengan yang ada di postman

		$begotten = [];
		array_push($begotten, $token, $company_id, $user_id);

		$post_data = array(
			"method"		=> "getUserInfo",
			"user"			=> $user_id
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
}

?>