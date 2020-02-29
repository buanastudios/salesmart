    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
        <!-- <div class="container-fluid"> -->
            <div class="row justify-content-arround">
                <!-- <div class="col-1">&nbsp;</div> -->
                <div class="col-1">
                    <div class="single-footer-widget footer_1">
                        <a href="index"> <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/logo.png" alt=""> </a>                        
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-footer-widget footer_2">
                        <div class="row justify-content-arround">
                            <div class="col-3">
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#chooseClientModal" >Choose Client</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#chooseStoreModal" >Choose Store</a></li>
                                    <li><a href="product/favorite">Favorite</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li><a href="history">History</a></li>
                                    <li><a href="account">My Account</a></li>
                                    <li><a href="account/settings">Settings</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li><a href="about">About Company</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                    <li><a href="pp">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li><a href="tnc">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="single-footer-widget footer_3">&nbsp;</div>
                </div>
                <div class="col-3">
                    <div class="single-footer-widget footer_4">
                        <h4 id="appsmarketplace">Download SalesMart Apps</h4>
                        <div class="appsmarketplace">
                            <ul>
                                <li><img src="<?php echo base_url('resources/images/salesmart/app-store.png'); ?>" title="SalesMart di App Store" alt="SalesMart di App Store" /></li><li><img src="<?php echo base_url('resources/images/salesmart/play-store.png'); ?>" title="SalesMart di Play Store" alt="SalesMart di Play Store" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    &nbsp;
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- footer on mobile start-->
    <div class="spacer-on-mobile" id="footer-on-mobile">
        <div class="spacer" id="footer-content-on-mobile">&nbsp;</div>
    </div>
    <!-- footer on mobile end-->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="chooseClientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="companies">
            <form method="POST" action="<?=base_url('/store');?>">
                <div class="company-grid radio-group">
                    <?php
                        if($list_company){
                            foreach ($list_company as $row) {
                    ?>
                            <div class="company-col card radio" data-value="<?=$row->company_id;?>">
                                <img src="<?=$row->company_logo.'?'.mt_rand(); ?>" />
                                <span class="company-name" data-value="<?=$row->company_name;?>"><?=$row->company_name;?></span>
                            </div>                    
                    <?php
                            }
                        }
                    ?>
                          
                </div>

                <input type="hidden" name="referer_url" value="<?=current_url(); ?>" />
                <input type="hidden" name="company_name" />
                <input type="hidden" name="company_id" value="<?=$this->session->userdata('company_id'); ?>" />
                <input type="hidden" name="customerandstoreselection" value="true" /> 
                
                <div class="buttons">
                     
                 
                <input id="submitSwitchClient" type="submit" class="btn btn-primary" value="OK" />
                <!-- <input id="cancelSwitchStore"type="button" class="btn btn-outline-primary" value="Cancel" /> -->
                <button  id="cancelSwitchClient" type="button" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Cancel">Cancel</button>
                </div>
            </form>    
            </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="chooseStoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

            <?php 
                // var_dump($list_store);
            ?>
           
            <div class="stores">
                <form method="POST">
                <div class="store-grid radio-group">
                    <?php
                        if(($list_store) && ($list_store!=NULL) && (isset($list_store)) && (!empty($list_store)) && (!is_null($list_store))){
                            foreach ($list_store as $row) {
                    ?>
                    <div class="store-col card radio" data-value="<?=$row->customer_id;?>">
                        <span class="store-name"><?=$row->customer_name; ?></span>
                        <span class="store-address"><?=$row->address; ?></span>
                    </div>
                    <?php
                            }
                        }
                    ?>
                          
                </div>
                <input type="hidden" name="referer_url" value="<?=current_url(); ?>" />
                <input type="hidden" name="customer_id" />
                <input type="hidden" name="company_id" value="<?=$this->session->userdata('company_id'); ?>" />
                <input type="hidden" name="customerandstoreselection" value="true" /> 
                
                <div class="buttons">
                     
                 
                <input id="submitSwitchStore" type="submit" class="btn btn-primary" value="OK" />
                <!-- <input id="cancelSwitchStore"type="button" class="btn btn-outline-primary" value="Cancel" /> -->
                <button  id="cancelSwitchStore" type="button" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Cancel">Cancel</button>
                </div>
            </form>    
        </div>
      </div>
    </div>
    </div>