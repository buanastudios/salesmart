    <!-- COMMON SCRIPTS -->
    <?php       
        $themefolder = 'reg';
        $this->load->view($themefolder.'/scripts/common'); 
        echo "\n"."\n";
    ?>
	    <!-- CUSTOM Account CSS -->
	    <script type="text/javascript" src="<?php echo base_url(JSPATH);?>/custom-account.js<?='?'.mt_rand(); ?>"></script>