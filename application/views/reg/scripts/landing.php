    <!-- COMMON SCRIPTS -->
    <?php       
        $themefolder = 'reg';
        $this->load->view($themefolder.'/scripts/common'); 
        echo "\n"."\n";
    ?>
	    <!-- CUSTOM Landing JS -->
	    <script type="text/javascript" src="<?php echo base_url(JSPATH);?>/custom-landing.js<?='?'.mt_rand(); ?>" ></script>