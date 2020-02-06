    <section class="thecontent highlight_products">
        <div class="container">
            <div id="highlight_products" class="row">                    
                <div class="col-12">                    
                    <h1>ORDER</h1>                    
                            <div class="hot_products text-center">                    
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row">
                                            <?php 
                                                for($i=0;$i<6;$i++){
                                            ?>
                                            <div class="col-2 text-center hot_product">
                                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                <h3 class="product_title">Category <?=$i+1; ?></h3>
                                                <h4 class="product_description">Product <?=$i+1; ?></h4>                                                
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
                                                <h3 class="product_title">Category <?=$i+1; ?></h3>
                                                <h4 class="product_description">Product <?=$i+1; ?></h4>
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
                        
                                                