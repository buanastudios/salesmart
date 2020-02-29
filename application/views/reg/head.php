	<head>
	<?php 
	echo "\n";
	switch($this->router->class){
		case 'welcome':
						$this->load->view('reg/heads/welcome');
						break;
		case 'login': 
						$this->load->view('reg/heads/login', $data);
						break;						
		case 'pin':
						$this->load->view('reg/heads/pin', $data);
						break;
		case 'store':
						$this->load->view('reg/heads/store', $data);
						break;
		case 'company':
						$this->load->view('reg/heads/company', $data);
						break;
		case 'product':
						$this->load->view('reg/heads/product', $data);
						break;
		case 'promo':
						$this->load->view('reg/heads/promo', $data);
						break;
		case 'highlight':
						$this->load->view('reg/heads/highlight', $data);
						break;
		case 'cart':
						$this->load->view('reg/heads/cart', $data);
						break;
		case 'chat':
						$this->load->view('reg/heads/chat', $data);
						break;
		case 'landing': 
						$this->load->view('reg/heads/landing');
						break;
		case 'account': 
						$this->load->view('reg/heads/account');
						break;
		case 'history': 
						$this->load->view('reg/heads/history');
						break;
		default:
						$this->load->view('reg/heads/common');
						break;
	}	
	echo "\n";
	echo "\n";
	?>
	</head>