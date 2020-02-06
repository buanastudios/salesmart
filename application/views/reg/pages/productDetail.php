    <section class="product_detail">
        <div class="container">
            <div id="product_detail" class="row">                    
                <div class="col-12">
                    <h1>Product List</h1>
                    <h2>Category Product #1 &raquo; Product</h2>
                    <div id="product_properties" class="row">
                        <div class="col-6">
                            <div class="product_image">
                                <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="product" />                            
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis libero et mi pulvinar malesuada eget a elit. Vestibulum dapibus nunc vitae urna tristique, eget dignissim erat ultricies.</p>
                            <p id="product_tags"><span>luctus</span><span>accumsan</span><span>tortor</span><span>posuere</span></p>
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
                            <div>&nbsp;</div>
                            <table class="table table-bordered" style="width:200px;">
                              <thead>
                                <tr>                            
                                  <th scope="col">Qty</th>
                                  <th scope="col">Price</th>                                  
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row"> &lt; 50</th>
                                  <td>Rp. 70.000,-</td>
                                </tr>
                                <tr>
                                  <th scope="row">51 - 99</th>
                                  <td>Rp. 60.000,-</td>
                                </tr>
                                <tr>
                                  <th scope="row"> &gt 100</th>
                                  <td>Rp. 50.000,-</td>                                  
                                </tr>
                              </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div id="product_description" class="row">
                        <div class="col-6">
                            <h2>Deskripsi Produk</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis libero et mi pulvinar malesuada eget a elit. Vestibulum dapibus nunc vitae urna tristique, eget dignissim erat ultricies. Vivamus quis iaculis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus tincidunt tempor ultrices. Duis eget tincidunt ipsum. Sed dui eros, placerat vitae tempus ac, faucibus eu enim. Donec a arcu ultrices, consectetur orci id, mollis sem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product_buttons" class="row text-center justify-content-center">                    
                <div class="col-12">
                    <button type="button" class="btn btn-outline-primary">BUY</button>                
                    <button type="button" class="btn btn-primary">ADD TO CART</button>
                    <button type="button" class="btn btn-outline-primary"><i class='fa fa-heart'>&nbsp;</i></button>
                </div>                
            </div>
        </div>
    </section>
                                                