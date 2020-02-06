    <section class="thecontent cart">
        <div class="container">
            <div id="cart" class="row">                    
                <div class="col-12">                    
                    <h1>CART</h1>                    
                    <div class="cart_box">
                        <div class="row" style="border-radius:5px; box-shadow: 0px 0px 5px 5px #ccc !important; padding: 20px; margin-left:0px; margin-top:20px;margin-bottom:20px;width:100%;">
                            <div class="col-3">
                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="ordered-product" />
                            </div>
                            <div class="col-9">
                                <h4>Product #1</h4>                                
                                <p id="product_price_origin">Rp. 100.000,-</p>
                                <p id="product_price_discounted">Rp. 70.000,-</p>
                                <div>&nbsp;</div>
                                <p>Jumlah</p>
                                <buton class="btn btn-outline-primary">-</buton>
                                <input type="number" name="product_order_qty" id="product_order_qty" class="input" value="" size="1" maxlength="1" />
                                <buton class="btn btn-outline-primary">+</buton>
                                <div>&nbsp;</div>
                                <p>Catatan Untuk Penjual (Optional)</p>
                                <textarea rows="1"></textarea>
                                <a href="#d">DELETE</a>
                            </div>                            
                        </div>
                        <div class="row" style="border-radius:5px; box-shadow: 0px 0px 5px 5px #ccc !important; padding: 20px; margin-left:0px; margin-top:20px; margin-bottom:20px;width:100%;">
                            <div class="col-3">
                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="ordered-product" />
                            </div>
                            <div class="col-9">
                                <h4>Product #2</h4>                                
                                <p id="product_price_origin">Rp. 100.000,-</p>
                                <p id="product_price_discounted">Rp. 70.000,-</p>
                                <div>&nbsp;</div>
                                <p>Jumlah</p>
                                <buton class="btn btn-outline-primary">-</buton>
                                <input type="number" name="product_order_qty" id="product_order_qty" class="input" value="" size="1" maxlength="1" />
                                <buton class="btn btn-outline-primary">+</buton>
                                <div>&nbsp;</div>
                                <p>Catatan Untuk Penjual (Optional)</p>
                                <textarea rows="1"></textarea>
                                <a href="#d">DELETE</a>
                            </div>                            
                        </div>
                        <div class="row" style="border-radius:5px; box-shadow: 0px 0px 5px 5px #ccc !important; padding: 20px; margin-left:0px; margin-top:20px;margin-bottom:20px; width:100%;">
                            <div class="col-3 text-left">
                                <span style="font-weight:600;font-size:16px;">TOTAL</span>
                            </div>
                            <div class="col-9 text-right">
                                <span style="font-weight:600;font-size:16px;">Rp. 140.000,-</span>
                            </div>                            
                        </div>
                        <div class="row" style="width:100%;">
                            <div class="col-6 text-right">
                                <button class="btn btn-outline-primary" style="width:300px;">+ ADD MORE PRODUCT</button>                                
                            </div>
                            <div class="col-6 text-left">
                                <button id="btn_placeOrder" class="btn btn-primary" style="width:300px;">PLACE ORDER</button>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        
                                                