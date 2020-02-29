        <div id="company">
            <h1><img src="<?php echo base_url('resources/images/salesmart/header-login.png'); ?>" alt="SalesMart" 
            
            ></h1>
            <h2>SELECT STORE</h2>
            <form id="companyselection" method="POST" action="<?php echo base_url()?>landing">
                <div class="companies">

                    <?php if($list_store){
                        foreach ($list_store as $row) {
                        ?>
                            <div class="col-lg-6"><input type="radio" name="customer_id"  value="<?php echo $row->customer_id;?>" size="1" maxlength="1" /> <?php echo $row->customer_name;?></div>
                        <?php
                        }
                    }
                    ?>

                    <input type="hidden" name="company_id" value="<?php echo $company_id;?>">                
                    <!--
                    <div>
                        <input type="radio" name="company[]" id="company_1" value="" size="1" maxlength="1" /> COMPANY ABC
                        <input type="radio" name="company[]" id="company_2" value="" size="1" maxlength="1" /> COMPANY BCD
                    </div>
                    <div>
                        <input type="radio" name="company[]" id="company_3" value="" size="1" maxlength="1" /> COMPANY CDE
                        <input type="radio" name="company[]" id="company_4" value="" size="1" maxlength="1" /> COMPANY DEF                    
                    </div>
                    -->

                </div>                

                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary button-large" value="OK">
                    <input type="button" name="cancel" id="cancel" class="button button-primary button-large" value="CANCEL" onclick="window.history.back();">
                </p>            
            </form>
        </div> <!-- /login -->