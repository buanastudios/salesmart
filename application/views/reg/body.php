<?php
	$themefolder ="reg";

	switch($this->router->class){
		case 'welcome':
    						$bodyclass = 'home'; 			
    						break;
		case 'login': 
    						$bodyclass = 'login'; 
    						break;
		case 'pin':
    						$bodyclass = 'pin';
    						break;
        case 'store':
                            $bodyclass = 'store';
                            break;
        case 'company':
                            $bodyclass = 'company';
                            break;
        case 'cart':
                            $bodyclass = 'cart';
                            break;
        case 'product':
                            $bodyclass = 'product';
                            break;
        case 'promo':
                            $bodyclass = 'promo';
                            break;
        case 'chat'     :
                            $bodyclass = 'chat';
                            break;
        case 'account'     :
                            $bodyclass = 'account';
                            break;
        case 'highlight':
                            $bodyclass = 'highlight';
                            break;
		default:
						$bodyclass = $this->router->class;
						break;
	}	

    echo "\n";
?>
    <body class="<?php echo $bodyclass; ?>" cz-shortcut-listen="true">
    	<?php 	
    			//header
    			echo "\n";    			
    			switch($this->router->class){    
    				case 'login'        :   break;
                    case 'pin'          :   break;
                    case 'store'        :   break; 
                    case 'company'      :   $this->load->view($themefolder.'/headers/blank'); break; 
                    case 'highlight'    :   $this->load->view($themefolder.'/headers/content'); break; 
                    case 'cart'         :   $this->load->view($themefolder.'/headers/content'); break;
                    case 'chat'         :   $this->load->view($themefolder.'/headers/content'); break;                    
                    case 'product'      :   $this->load->view($themefolder.'/headers/content'); break;                    
                    case 'promo'        :   $this->load->view($themefolder.'/headers/content'); break;                    
                    case 'history'      :   $this->load->view($themefolder.'/headers/content'); break;                    
                    case 'account'      :   $this->load->view($themefolder.'/headers/content'); break;                    
    				case 'landing'      :   $this->load->view($themefolder.'/headers/content'); break;    								        
    				default: $this->load->view($themefolder.'/headers/common'); break;
    			}

    			//content
    			echo "\n";
    			switch($this->router->class){
					default: $this->load->view($themefolder.'/pages/'.$pn); break;
				}

				//footer
				echo "\n";
    			switch($this->router->class){
                    case 'store'        : break;
    				case 'login'        : break;
                    case 'cart'         : $this->load->view($themefolder.'/footers/content'); break;
                    case 'chat'         : $this->load->view($themefolder.'/footers/content'); break;
                    case 'highlight'    : $this->load->view($themefolder.'/footers/content'); break;
                    case 'product'      : $this->load->view($themefolder.'/footers/content'); break;
                    case 'promo'        : $this->load->view($themefolder.'/footers/content'); break;
                    case 'history'      : $this->load->view($themefolder.'/footers/content'); break;
                    case 'account'      : $this->load->view($themefolder.'/footers/content'); break;
    				case 'landing'      : $this->load->view($themefolder.'/footers/content'); break;                    
    				default             : $this->load->view($themefolder.'/footers/common'); break;
    			}

    			//scripts
    			echo "\n";
    			switch($this->router->class){    			
                    case 'promo': $this->load->view($themefolder.'/scripts/promo'); break;
    				case 'login': $this->load->view($themefolder.'/scripts/login'); break;
                    case 'cart' : $this->load->view($themefolder.'/scripts/cart'); break;
                    case 'product' : $this->load->view($themefolder.'/scripts/product'); break;
                    case 'landing' : $this->load->view($themefolder.'/scripts/landing'); break;
                    case 'store': $this->load->view($themefolder.'/scripts'); break;
    				default     : $this->load->view($themefolder.'/scripts'); break;
    			}				
        echo "\n";
		?>        
        <input id="ext-version" type="hidden" value="0.1.1" />    
        <?php  echo "\n"; ?>
    </body>