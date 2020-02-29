    <!-- COMPANY HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM COMPANY CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-company.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />