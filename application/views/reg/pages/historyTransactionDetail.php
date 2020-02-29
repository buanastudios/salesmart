    <?php
        $data_not_found = "Data Not Found";
        $trx_status     = NULL;
        $trx_id         = NULL;
        $trx_date       = NULL;
        $trx_total      = NULL;
        // echo "<pre>";
        // var_dump($list_transaction);
        // echo "</pre>";

        if($list_transaction){
            $trx_id     = $list_transaction->order_id;
            $trx_status = $list_transaction->status_name;
            $trx_date   = $list_transaction->date_order;
            $trx_total   = $list_transaction->final_total;
            // foreach ($list_transaction->det_order as $row) {
            //     echo "<pre>";
            //     var_dump($row);
            //     echo "</pre>";
            // }
        }
    ?>
    <section class="thecontent history">
        <div class="container">
            <div id="history" class="row">                    
                <div class="col-12">                    
                    <h1 class="hide-on-mobile font-weight-bold">DETAIL HISTORY</h1>
                    <div class="history-section history_main_trx">
                        <div>Status</div>                                                                
                        <p class="trx_status font-weight-bold text-dark"><?=(isset($trx_status)) ? $trx_status : $data_not_found; ?></p>

                        <div>Order ID</div>                                                                
                        <p class="trx_id font-weight-bold text-dark"><?=(isset($trx_id)) ? $trx_id : $data_not_found; ?></p>
                        
                        <div>Date</div>                                                                
                        <p class="trx_date font-weight-bold text-dark"><?=(isset($trx_date)) ? $trx_date : $data_not_found; ?></p>
                    </div>                    
                    <h2 class="font-weight-bold">LIST PRODUCT</h2>
                    <div class="history-section history_list">
                        <?php
                            foreach ($list_transaction->det_order as $row) { 
                        ?>
                        <div class="trx_order_item row" style="border-radius:1px; box-shadow: 0px 0px 5px 5px #ccc !important; padding: 20px; margin-left:0px; margin-top:20px;margin-bottom:20px;width:100%;" product_id="<?=$row->product_id;?>">
                            <div class="col-2 card p-3">
                                <img class="trx_img trx_order_item_image" src="<?=$row->images; ?>" alt="ordered-product" />
                            </div>
                            <div class="col-10">
                                <p class="trx_order_item_product_name font-weight-bold text-dark"><?=$row->product_name;?></p>       
                                <p class="trx_order_item_qty"><?=$row->qty_sales." (pcs)"; ?></p>
                                <p class="trx_order_item_price font-weight-bold text-dark"><?="Rp ".$row->final_price;?></p>
                                <p class="trx_order_item_note"><?=$row->note; ?></p>
                            </div>                            
                        </div>
                        <?php
                                }
                            
                        ?>
                        <div class="trx_order_item row" style="border-radius:1px; box-shadow: 0px 0px 5px 5px #ccc !important; padding: 20px; margin-left:0px; margin-top:20px;margin-bottom:20px;width:100%;" product_id="">
                            <div class="col-2 p-2 text-left">
                                <span class="font-weight-bold text-dark">GRAND TOTAL</span>
                            </div>
                            <div class="col-10 p-2 text-right">
                                <span class="font-weight-bold text-dark">Rp. <?=$trx_total; ?></span>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        
                                                