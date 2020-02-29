    <!-- COMMON SCRIPTS -->
    <?php       
        $themefolder = 'reg';
        $this->load->view($themefolder.'/scripts/common'); 
        echo "\n";
    ?>
	    <!-- CUSTOM PRODUCT CSS -->
	    <script type="text/javascript" src="<?php echo base_url(JSPATH);?>/custom-product.js<?='?'.mt_rand(); ?>"></script>