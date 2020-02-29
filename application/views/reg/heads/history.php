    <!-- HISTORY HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM HISTORY CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-history.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />