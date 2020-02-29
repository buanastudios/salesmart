    <style>
        .history-row{
            border-radius:5px;
            box-shadow: 0px 0px 5px 5px #ccc !important;
            padding: 20px;
            margin-left:0px;
            margin-top:20px;
            margin-bottom:20px;
            width:100%;
        }
    </style>
    <section class="thecontent history">
        <div class="container">
            <div id="history" class="row">                    
                <div class="col-12">                    
                    <h1>HISTORY</h1>                    
                    <div class="history_list">
                        <?php
                            if($list_transcation){
                            foreach ($list_transcation as $row) {
                        ?> 
                        <div class="row history-row" data-value=<?=$row->order_id; ?>>
                            <div class="col-2 card p-3">
                                <img class="trx_img" src="<?php echo base_url(IMAGEPATH);?>/salesmart/product.png" alt="ordered-product" />
                            </div>
                            <div class="col-10">
                                <div>Status</div>                                                                
                                <p class="trx_status font-weight-bold text-dark"><?=$row->status_name;?></p>

                                <div>Order ID</div>                                        
                                <p class="trx_id  font-weight-bold text-dark"><?=$row->order_id;?></p>
                                
                                <div>Date</div>                                                                
                                <p class="trx_date  font-weight-bold  text-dark"><?=$row->date_order;?></p>

                                <div>Amount</div>                                                                
                                <p class="trx_amount  font-weight-bold text-dark">Rp. <?=$row->final_total;?></p>
                            </div>                            
                        </div>
                        <?php
                                }
                            }
                        ?>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
                        
                                                