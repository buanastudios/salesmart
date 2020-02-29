    <!-- COMMON SCRIPTS -->
    <?php       
        $themefolder = 'reg';
        $this->load->view($themefolder.'/scripts/common'); 
        echo "\n"."\n";
    ?>
	    <!-- CUSTOM COMPANY CSS -->
	    <script type="text/javascript" src="<?php echo base_url(JSPATH);?>/custom-company.js<?='?'.mt_rand(); ?>"></script>