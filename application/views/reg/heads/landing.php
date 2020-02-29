    <!-- LANDING HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM LANDING CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-landing.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />