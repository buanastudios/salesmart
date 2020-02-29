    <!-- COMMON SCRIPTS -->
    <?php       
        $themefolder = 'reg';
        $this->load->view($themefolder.'/scripts/common'); 
        echo "\n";
    ?>
	    <!-- CUSTOM CART CSS -->
	    <script type="text/javascript" src="<?php echo base_url(JSPATH);?>/custom-cart.js<?='?'.mt_rand(); ?>" ></script>