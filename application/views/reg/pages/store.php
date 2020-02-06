        <div id="store">
            <h1><img src="<?php echo base_url('resources/images/salesmart/header-login.png'); ?>" alt="SalesMart" 
            
            ></h1>
            <h2>SELECT STORE</h2>
            <form id="storeselection">
                <div class="stores">                
                    <div>
                        <input type="radio" name="store[]" id="store_1" value="" size="1" maxlength="1" /> STORE ABC
                        <input type="radio" name="store[]" id="store_2" value="" size="1" maxlength="1" /> STORE BCD
                    </div>
                    <div>
                        <input type="radio" name="store[]" id="store_3" value="" size="1" maxlength="1" /> STORE CDE
                        <input type="radio" name="store[]" id="store_4" value="" size="1" maxlength="1" /> STORE DEF                    
                    </div>
                </div>                

                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary button-large" value="OK">
                    <input type="button" name="cancel" id="cancel" class="button button-primary button-large" value="CANCEL">
                </p>            
            </form>
        </div> <!-- /login -->