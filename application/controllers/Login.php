<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();	
	}
	
	// Halaman Login
	public function index(){
		$login = $this->session->userdata('login');
		if(!$login){
			$d['pn'] = 'login';
			$d['data']['title'] = 'Sign In';
			$this->load->view('reg/html', $d);	
		}else{
			redirect('/landing');
		}
	}

	public function act_login(){
		$btn_login				= isset($_POST['btn_login']) ? $_POST['btn_login'] : 0;
		$log_username_sedaap 	= isset($_POST['email']) ? $_POST['email'] : '';
		$log_password_sedaap 	= isset($_POST['password']) ? $_POST['password'] : '';
		$url 					= '';
		$data_api 				= '';
		$msg 					= '';
		$lang 					= 0;
		$setting 				= '';
		$set_lang				= '';

		if($log_username_sedaap != ""){
			//================== credential ===================================
			$key_signature_post='15a39a84a7cf9c3489784a6eff6365a3b5a085d7'; //sesuaikan dengan yang ada di postman
			$key_id='301'; // sesuaikan dengan yang ada di postman
			
			$post_data = array(
				"method"		=> 'postCustUserLogin',
				"password"		=> $log_password_sedaap,
				"email"			=> $log_username_sedaap
			);

			$url = URL_API;
			$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id);
			$data_api = json_decode($res_api);
			// var_dump($data_api);
			// exit();
			if($data_api->error_code==0){
				$playload=$data_api->payload->user;
				
				// $this->session->sess_expiration = $this->expiryinseconds($playload->expires);				

				$this->session->set_userdata('expires',$playload->expires);
				$this->session->set_userdata('token',$playload->token);
				$this->session->set_userdata('full_name', $playload->full_name);
				$this->session->set_userdata('user_photo', $playload->photo);

				$this->session->set_userdata('login', true);

				redirect('/company');

			}else{
				redirect('/login');
			}
		}
	}

	public function expiryinseconds($when){
		$now = strtotime(date("d M Y H:i:s"));
		$end = strtotime($when);
		$inseconds = $end - $now;
		//test
		$inseconds = 60;
		return $inseconds;
	}


	public function act_login_original(){
		$btn_login				= isset($_POST['btn_login']) ? $_POST['btn_login'] : 0;
		$log_username_sedaap 	= isset($_POST['email']) ? $_POST['email'] : '';
		$log_password_sedaap 	= isset($_POST['password']) ? $_POST['password'] : '';
		$url 					= '';
		$data_api 				= '';
		$msg 					= '';
		$lang 					= 0;
		$setting 				= '';
		$set_lang				= '';

		if($log_username_sedaap != ""){
			//================== credential ===================================
			$key_signature_post='15a39a84a7cf9c3489784a6eff6365a3b5a085d7'; //sesuaikan dengan yang ada di postman
			$key_id='301'; // sesuaikan dengan yang ada di postman
			
			$post_data = array(
				"method"		=> 'postCustUserLogin',
				"password"		=> $log_password_sedaap,
				"email"			=> $log_username_sedaap
			);

			$url = URL_API;
			$res_api = $this->send_api->post_data($url, json_encode($post_data),$key_signature_post,$key_id);
			$data_api = json_decode($res_api);
			// var_dump($data_api);
			// exit();
			if($data_api->error_code==0){
				$playload=$data_api->payload->user;
				
				// $this->session->sess_expiration = $this->expiryinseconds($playload->expires);				

				$this->session->set_userdata('expires',$playload->expires);
				$this->session->set_userdata('token',$playload->token);
				$this->session->set_userdata('full_name', $playload->full_name);
				$this->session->set_userdata('user_photo', $playload->photo);

				$this->session->set_userdata('login', true);

				redirect('/company');

			}else{
				redirect('/login');
			}
			//echo $url;
			//var_dump($data_api);
			/*if($data_api->role_id == 4 && $data_api->status==1){

			    $post_data2 = array(
					"user_id"		=> $data_api->user_id
				);
				$url_setting = URL_API.'customerService/setting';
				$data_setting = $this->send_api->post_data($url_setting, $post_data2);
				$setting = json_decode($data_setting);
				foreach($setting->SETTING as $s){
					$lang = $s->language;
				}
				$set_lang = '';
				if($lang == 1){
					$set_lang = 'bhs_indo';
				}
				if($lang == 2){
					$set_lang = 'bhs_ingg';
				}
				$this->session->set_userdata('role_id',$data_api->role_id);
				$this->session->set_userdata('first_time_login', $data_api->first_time_login);
				$this->session->set_userdata('user_id',$data_api->user_id);
				$this->session->set_userdata('user_email',$data_api->user_email);
				$this->session->set_userdata('name',$data_api->name);
				$this->session->set_userdata('handphone',$data_api->handphone);
				$this->session->set_userdata('login_user',true);
				$this->session->set_userdata('lang_user', $set_lang);
			
				
				$data_api->cart = $cnt_carts;
				echo json_encode($data_api);
			}else if($data_api->role_id==4 && $data_api->status==1){
				$data['status']=-1;
				echo json_encode($data);
			}else{
				$msg = $data_api->message;
				echo $res_api;
			}*/
		}
		#$data['msg'] = $msg;
		#$data['content_register'] = "hide";
		#$data['cnt_cart'] = $cnt_carts;
		#$content = $this->load->view('login', $data, TRUE);
		#$this->template->load($setting, $content);
	}


	public function logout() {
        $this->session->sess_destroy();
        redirect('/login');
    }

}

?>