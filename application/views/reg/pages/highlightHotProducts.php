    <section class="thecontent highlight_products">
        <div class="container">
            <div id="highlight_products" class="row">                    
                <div class="col-12">                    
                    <h1 class="hide-on-mobile">HOT PRODUCT</h1>                    
                            <div class="hot_products text-center">                    
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <?php 
                                                for($i=0;$i<6;$i++){
                                            ?>                                            
                                            <div class="col-6 col-sm-6 col-xs-6 col-lg-2 col-xl-2 text-center hot_product">
                                                <div class="">
                                                    <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                    <div class="product_info">
                                                        <h3 class="product_title">Product <?=$i+1; ?></h3>
                                                        <h4 class="product_description">11-22-33</h4>
                                                        <div class="product_price discounted">Rp. 100.000,-</div>
                                                        <div class="product_price">Rp. 100.000,-</div>
                                                        <!-- <button class="btn btn-primary product_buy_button">BUY</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php        
                                                }
                                            ?>                                                                                    
                                        </div>
                                        <div class="row">
                                            <?php 
                                                for($i=6;$i<12;$i++){
                                            ?>
                                            <div class="col-6 col-sm-6 col-xs-6 col-lg-2 col-xl-2 text-center hot_product">
                                                <div class="">
                                                    <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                    <div class="product_info">
                                                        <h3 class="product_title">Product <?=$i+1; ?></h3>
                                                        <h4 class="product_description">11-22-33</h4>
                                                        <div class="product_price discounted">Rp. 100.000,-</div>
                                                        <div class="product_price">Rp. 100.000,-</div>
                                                        <!-- <button class="btn btn-primary product_buy_button">BUY</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php        
                                                }
                                            ?>                                                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
