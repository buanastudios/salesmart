<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_api

{
	protected 	$ci;
	public function __construct() {		
		$this->ci =& get_instance();
	}
	
	
	function send_data($url= '', $data=array(),$key_signature_post='',$key_id=''){
		
		
		$headers = array(
			'Content-Type:application/json',
			"Key-Signature-Post:".$key_signature_post,
    		"Key-Id:".$key_id
		);
					
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		$result = curl_exec($ch);
		if ($result === FALSE) {
			die('Send Error: ' . curl_error($ch));
		}
		curl_close($ch);
		return $result;
	}	
	
	function post_data($url= '', $data=array(),$key_signature_post='',$key_id='',$Token=''){
		
		if($Token!=''){
			$headers = array(
				'Content-Type:application/json',
				"Key-Signature-Post:".$key_signature_post,
	    		"Key-Id:".$key_id,
	    		"Token:".$Token
			);
		}else{
			$headers = array(
				'Content-Type:application/json',
				"Key-Signature-Post:".$key_signature_post,
	    		"Key-Id:".$key_id
			);	
		}
		
					
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		
		$result = curl_exec($ch);


		//var_dump($headers);

		if ($result === FALSE) {
			die('Post Error: ' . curl_error($ch));
		}
		curl_close($ch);
		return $result;
	}	
	
	
	
}

?>