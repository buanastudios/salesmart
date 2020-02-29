    	<!-- COMMON SCRIPTS -->
    <?php       
	    $themefolder = 'reg';
	    $this->load->view($themefolder.'/scripts/common'); 
	    echo "\n"."\n";
    ?>
	    <!-- CUSTOM PROMO CSS -->
	    <script type="text/javascript" src="<?php echo base_url(JSPATH);?>/custom-history.js<?='?'.mt_rand(); ?>"></script>