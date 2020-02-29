    <!-- HIGHLIGHT HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM HIGHLIGHT CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-highlight.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />