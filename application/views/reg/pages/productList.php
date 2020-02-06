    <section class="thecontent products_list">
        <div class="container-fluid">
            <div id="products_list" class="row">                    
                <div class="col-12">                    
                    <h1>LIST PRODUCT</h1> 
                    <h2>Category Product 1 &gt; Product</h2>    
                    <div class="row">
                        <div class="col-4">
                            <h4>SORT BY</h4>
                            <div>
                                <h5>NAME</h5>
                                <div id="sortby_name" class="sortedby">
                                    <input class="form-control input" type="text" placeholder="A-Z" />&nbsp;-&nbsp;<input class="form-control input"  type="text" placeholder="Z-A" />
                                </div>
                            </div>
                            <div>
                                <h5>PRICE</h5>
                                <div id="sortby_price" class="sortedby">
                                    <input class="form-control input" type="text" placeholder="Minimum Price"/>&nbsp;-&nbsp;<input class="form-control input"  type="text" placeholder="Maximum Price"/>
                                </div>
                            </div>
                            <div>
                                <h5>CATEGORY</h5>
                                <ul id="sortby_category" class="sortedby">
                                    <li><input type="checkbox" /> Category 1</li>
                                    <li><input type="checkbox" /> Category 2</li>
                                    <li><input type="checkbox" /> Category 3</li>
                                    <li><input type="checkbox" /> Category 4</li>
                                </ul>
                            </div>
                            <div>
                                <h5>PRODUCT TAG</h5>
                                <ul id="sortby_producttag" class="sortedby">
                                    <li><input type="checkbox" /> Category 1</li>
                                    <li><input type="checkbox" /> Category 2</li>
                                    <li><input type="checkbox" /> Category 3</li>
                                    <li><input type="checkbox" /> Category 4</li>
                                </ul>
                            </div>
                            <div>
                                <h5>RANGE PRICE</h5>
                                <div id="sortby_rangeprice" class="sortedby">
                                    <input class="form-control input" type="text" placeholder="Minimum Price"/>&nbsp;-&nbsp;<input class="form-control input"  type="text" placeholder="Maximum Price"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">                   
                                <div class="row justify-content-around">
                                    <div class="col-12">
                                        <div class="row justify-content-around">
                                            <?php 
                                                for($i=0;$i<4;$i++){
                                            ?>
                                            <div class="col-3 text-center hot_product">
                                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                <h3 class="product_title">Product <?=$i+1; ?></h3>
                                                <h4 class="product_description">11-22-33</h4>
                                                <div class="product_price">Rp. 100.000,-</div>
                                            </div>
                                            <?php        
                                                }
                                            ?>                                                                                    
                                        </div>
                                        <div class="row justify-content-around">
                                            <?php 
                                                for($i=4;$i<8;$i++){
                                            ?>
                                            <div class="col-3 text-center hot_product">
                                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />
                                                <h3 class="product_title">Product <?=$i+1; ?></h3>
                                                <h4 class="product_description">11-22-33</h4>
                                                <div class="product_price">Rp. 100.000,-</div>
                                            </div>
                                            <?php        
                                                }
                                            ?>                                                                                    
                                        </div>
                                        <div class="row justify-content-around">
                                            <?php 
                                                for($i=8;$i<12;$i++){
                                            ?>
                                            <div class="col-3 text-center hot_product">
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
        </div>
    </section>