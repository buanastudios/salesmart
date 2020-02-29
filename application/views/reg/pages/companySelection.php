        <div id="company">
            <h2>SELECT COMPANY</h2>
            <style>

            </style>

            <form id="selectioncompany" method="POST" action="<?php echo base_url()?>store">
                <div class="companies">
                    <div class="company-grid radio-group">
                        <?php
                    // for ($i=0; $i < 6 ; $i++) {
                        if($list_company){
                        foreach ($list_company as $row) {
                    ?> 
                            
                           <div class="company-col card radio" data-value="<?=$row->company_id;?>">
                                <!--<img src="<?=base_url('resources/images/salesmart/select-image.png').'?'.mt_rand(); ?>" /> -->
                                <img src="<?=$row->company_logo.'?'.mt_rand(); ?>" />
                                

                                <span class="company-name" data-value="<?=$row->company_name;?>"><?=$row->company_name;?></span>
                            </div>

                        <?php
                        }
                    }
                    ?>                
                    </div>
                    <input type="hidden" name="company_id" />
                    <input type="hidden" name="company_name" />
                </div>                
                <div class="spacer"></div> 
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-large" value="NEXT">
                </p>            
            </form>
        </div> <!-- /login -->