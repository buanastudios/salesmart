    <!-- PIN HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM PIN CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-pin.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />