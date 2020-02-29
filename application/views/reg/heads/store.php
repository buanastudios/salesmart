    <!-- STORE HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM STORE CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-store.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />