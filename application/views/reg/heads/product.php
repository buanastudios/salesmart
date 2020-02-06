    <!-- PRODUCT HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- custom PRODUCT CSS -->
    <link rel="stylesheet" href="<?php echo base_url(CSSPATH);?>/custom-product.css">