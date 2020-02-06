    <section class="thecontent highlight_products">
        <div class="container">
            <div id="highlight_products" class="row">                    
                <div class="col-12">                    
                    <h1>FAVORITE</h1>                    
                            <div class="hot_products text-center">                    
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row">
                                            <?php 
                                                for($i=0;$i<6;$i++){
                                            ?>
                                            <div class="col-2 text-center hot_product">
                                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                <h3 class="product_title">Product <?=$i+1; ?></h3>
                                                <h4 class="product_description">11-22-33</h4>
                                                <div class="product_price">Rp. 100.000,-</div>
                                            </div>
                                            <?php        
                                                }
                                            ?>                                                                                    
                                        </div>
                                        <div class="row">
                                            <?php 
                                                for($i=6;$i<12;$i++){
                                            ?>
                                            <div class="col-2 text-center hot_product">
                                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                <h3 class="product_title">Product <?=$i+1; ?></h3>
                                                <h4 class="product_description">11-22-33</h4>
                                                <div class="product_price">Rp. 100.000,-</div>
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
                        
                                                