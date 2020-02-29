    <!-- PRODUCT HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- custom PRODUCT CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-product.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />