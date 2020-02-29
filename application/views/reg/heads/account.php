    <!-- ACCOUNT HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM ACCOUNT CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-account.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />