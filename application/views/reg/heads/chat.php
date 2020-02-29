    <!-- CHAT HEADS -->
    <?php
        $themefolder = 'reg';
        $this->load->view($themefolder.'/heads/common'); 
        echo "\n";
    ?>
    <!-- CUSTOM CHAT CSS -->
    <link href="<?php echo base_url(CSSPATH);?>/custom-chat.css<?='?'.mt_rand(); ?>" rel="stylesheet" type="text/css" />