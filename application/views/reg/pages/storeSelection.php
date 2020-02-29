        <div id="store">
            <h2>SELECT STORE</h2>
            <style>

            </style>

            <form id="selectionstore" method="POST" action="<?=base_url()?>landing">
                <div class="stores">
                    <div class="store-grid radio-group">
                        <?php
                        if($list_store){
                        foreach ($list_store as $row) {
                    ?> 
                            
                           <div class="store-col card radio" data-value="<?=$row->customer_id;?>">
                                <span class="store-user-id" data-value="<?=$row->cust_user_id;?>"></span>
                                <span class="store-name"><?=$row->customer_name;?></span>
                                <span class="store-address"><?=$row->address;?></span>
                            </div>

                        <?php
                        }
                    }
                    ?>                
                    </div>
                    <input type="hidden" name="user_id" />
                    <input type="hidden" name="customer_id" />
                    <input type="hidden" name="referer_url" value="<?=$referer_url; ?>" />
                    
                    <input type="hidden" name="company_id" value="<?=$company_id;?>" />  
                    <input type="hidden" name="company_name" value="<?=$company_name;?>" />

                    <input type="hidden" name="customerandstoreselection" value="true" />  
                </div>                
                <div class="spacer"></div> 
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-large" value="NEXT">
                </p>            
            </form>
        </div> <!-- /login -->