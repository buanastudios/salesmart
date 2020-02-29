    <!-- banner promo start-->
    <section class="bannerpromo_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 align-self-center">
                    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="list-box">
                           <?php 
                            // $list_promo_banner = null;
                            // echo "<pre>";
                            // var_dump($list_promo_banner);
                            // echo "</pre>";
                            if($list_promo_banner){
                                foreach ($list_promo_banner as $row) {
                                    // echo $row->banner_image;
                            ?>
                            <div class="carousel-item <?=($row->cust_banner_id=='1') ? 'active': ''; ?>">
                                <img data-animation="animated slideInLeft" class="d-block w-100" src="<?=$row->banner_image; ?>" alt="Slide <?=$row->title; ?>" />
                            <!-- <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>                            
                            </div> -->
                          </div>
                            <?php
                                    }
                                }else{
                                
                                    for ($i=1; $i < 4 ; $i++) { 
                            ?>
                          <div class="carousel-item <?=($i==1) ? 'active': ''; ?>">
                            <img data-animation="animated slideInRight" class="d-block w-100" src="<?=base_url("resources/images/salesmart/promo_slide_".$i.".png"); ?>" alt="Second slide" />
                          </div>
                          <?php
                                }
                             }
                          ?>
                          
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <h4 class="seeall"><a href="#" >SEE ALL</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- banner promo end-->
    <section class="separator_section" id="s1" >
        <div class="container">
            <div class="spacer">
            &nbsp;
            </div>
        </div> 
    </section>
    <!--category start-->
    <section class="category_part">
        <div class="container">
            <h3>CATEGORY</h3>
            <div class="row">
                
                <div class="col-12 align-self-center category_row_card owl-carousel owl-theme">
                <?php 
                    //$list_product_category = null;
                    if(isset($list_product_category)){
                        foreach ($list_product_category as $row) {
                ?>
                    <div class="card item" data-value="<?=$row->product_group_id; ?>">
                        <img class="category_image" src=<?=$row->images; ?> alt="White Category #1"/>
                        <span class="category_text_underimage"><?=$row->product_group_name; ?></span>
                    </div>
                <?php
                        }
                    }else{
                    
                        for ($i=1; $i < 6; $i++) { 
                ?>
                    <div class="card item">
                        <img class="category_image" src=<?=base_url("resources/images/salesmart/category-white.png");?> alt="White Category #<?=$i;?>"/>
                        <span class="category_text_underimage">Category #<?=$i;?></span>
                    </div>
                <?php
                        }
                    }
                ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- category promo end-->
    <section class="separator_section">
        <div class="container">
            <div class="spacer">
            &nbsp;<!-- <hr class="blueline"> -->
            </div>
        </div> 
    </section>
    <!-- hot product start-->
    <section class="hotproduct_part">
        <div class="container">
            <h3>Hot Product</h3>
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <h4 class="seeall"><a href="#" >SEE ALL</a></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 align-self-center product_row_card">
                    <?php 
                    // $list_products = null;
                    $hot_product_count = 0;
                    if($list_products){
                        foreach ($list_products as $row) {
                            
                            $hot_product_count++;
                            if($hot_product_count <=5){ 
                    ?>
                    <div class="card" data-value="<?=$row->product_id;?>">
                      
                        <img class="product_image" src=<?=$row->images;?> alt="<?=$row->product_name;?>"/>                        
                        <h3 class="product_title"><?=$row->product_name;?></h3>
                        <h4 class="product_description"><?=substr(trim($row->description),0,30);?></h4>
                        <div class="product_price discounted">Rp. 200.000,-</div>
                        <div class="product_price">Rp. <?=$row->price_sales;?>,-</div>                    
                    </div>
                    <?php
                            }
                        }
                    }else{
                    
                        for ($i=1; $i < 6 ; $i++) { 
                    ?>
                    <div class="card">
                        <img class="product_image" src=<?=base_url("resources/images/salesmart/product_image_".$i.".png");?> alt="Product Image #<?=$i; ?>"/>                        
                        <h3 class="product_title">Product <?=$i; ?></h3>
                        <h4 class="product_description">11-22-33</h4>
                        <div class="product_price">Rp. 100.000,-</div>                    
                    </div>
                    <?php
                            }
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- hot product end-->
    <section class="separator_section">
        <div class="container">
            <hr class="blueline">
            <div class="spacer">&nbsp;</div>
        </div> 
    </section>
    <!-- new product start-->
    <section class="newproduct_part">
        <div class="container">
            <h3>New Product</h3>            
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <h4 class="seeall"><a href="#" >SEE ALL</a></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 align-self-center product_row_card">                    
                    <?php 
                    $new_product_count = 0;
                    if($list_products){
                        foreach ($list_products as $row) {
                            
                            $new_product_count++;
                            if($new_product_count <=5){                     ?>
                    <div class="card">
                        <img class="product_image" src=<?=$row->images;?> alt="Product Image #1"/>                        
                        <h3 class="product_title"><?=$row->product_name;?></h3>
                        <h4 class="product_description"><?=substr(trim($row->description),0,30);?></h4>
                        <div class="product_price discounted">Rp. 100.000,-</div>
                        <div class="product_price">Rp. <?=$row->price_sales;?>,-</div>                    
                    </div>
                    <?php
                            }
                        }
                    }else{
                    
                        for ($i=1; $i < 6 ; $i++) { 
                    ?>
                    <div class="card">
                        <img class="product_image" src=<?=base_url("resources/images/salesmart/product_image_".$i.".png");?> alt="Product Image #<?=$i; ?>"/>                        
                        <h3 class="product_title">Product <?=$i; ?></h3>
                        <h4 class="product_description">11-22-33</h4>                        
                        <div class="product_price">Rp. <?=$i; ?>0.000,-</div>                    
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

    </section>
    <!-- new product end-->
    <section class="separator_section">
        <div class="container">
            <hr class="blueline">
            <div class="spacer">&nbsp;</div>
        </div> 
    </section>
    <!-- order this month start-->
    <section class="orderthismonth_part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Order This Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="orderThisMonth">Rp. 1.000.000</span></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- order this month end-->
    <section class="separator_section">
        <div class="container">            
            <div class="spacer">&nbsp;</div>
        </div> 
    </section>

<!-- order this month end-->