    <!-- PROMO HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM PROMO CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-promo.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />