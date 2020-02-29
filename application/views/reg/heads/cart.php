    <!-- CART HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM CART CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-cart.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />