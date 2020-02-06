    <!-- CONTENT HEADER -->
    <!--::header part start::-->
    <!-- <header class="main_menu home_menu"> -->    
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/companylogo.png" alt="logo"> </a>
                        <button id="burgermenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" class="btn white" href="#" style="color:white;"><i class="fa fa-bars fa-2x" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation" aria-hidden="true"></i></button>
                        <!-- <button id="burgermenu" class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>                         -->
                        <form class="form-inline my-0 my-lg-0">
                        <div id="searchbox_group" class="input-group mb-0 mr-sm-0">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="color: Dodgerblue;"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search" />
                        </div>
                        </form>                     
                        <span id="maincompanyname_group" class="navbar-text" style="height: 53px;"><a id="maincompanyname">PT COMPANY BERSAMA</a></span>
                        <span id="cartbutton_group" class="navbar-text " style="">
                            <a id="cartbutton" class="badge outter-badge">
                                <img src="<?= base_url('').'resources/images/salesmart/cart-white.png';?>">
                                <span class="badge badge-danger inner-badge">100</span>
                            </a>
                        </span>
                        <span id="chatbutton_group" class="navbar-text ">
                            <a id="chatbutton" class="badge outter-badge">
                                <img src="<?= base_url('').'resources/images/salesmart/chat-white.png';?>">
                                <span class="badge badge-danger inner-badge">200</span>
                            </a>
                        </span>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav px-5 py-4 mr-auto">
            <li class="nav-item avatar">
                <a class="nav-link p-0" href="account">
                  <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/photo-sakti.png" class="account_avatar rounded-circle z-depth-0"
                    alt="avatar image" height="65">
                    <div style="white-space: pre-wrap;width: 200px;"><span>Arti Hikmatullah Perbawana Sakti Buana</span></div>
                </a>
            </li>
            <li class="nav-item">                                    
                <a href="client/choose">Choose Client</a>
            </li>                                                                                        
            <li class="nav-item">
                <a href="store/choose">Choose Store</a>
            </li>
            <li class="nav-item">
                <a href="highlight/favproducts">Favorite</a>
            </li>
            <li class="nav-item">
                <a href="history">History</a>
            </li>
            <li class="nav-item">
                <a href="account">My Account</a>
            </li>
            <li class="nav-item">
                <a href="account/settings">Setting</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="blog" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    General Information
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about">About Company</a>
                    <a class="dropdown-item" href="contact">Contact Us</a>
                    <a class="dropdown-item" href="policy/privacy">Privacy Policy</a>
                    <a class="dropdown-item" href="tnc">Terms &amp; Conditions</a>
                </div>
            </li>
        </ul>
    </div>

    <div id="overlay"></div>

    <section id="only-on-mobile-bottom-header">
        <header id="header-bottom-area">
            <div class="navbar">
                <a href="<?=base_url();?>" class="nav-link active">
                    <img class="bottom-header-icon" src="<?= base_url('resources/images/salesmart/home-icon.png'); ?>" />
                    <div>Home</div>
                </a>
                <a href="<?=base_url("highlight/favproducts");?>" class="nav-link ">
                    <img class="bottom-header-icon" src="<?= base_url('resources/images/salesmart/favorite-icon.png'); ?>" />
                    <div>Favorite</div>
                </a>
                <a href="<?=base_url("history");?>" class="nav-link ">
                    <img class="bottom-header-icon" src="<?= base_url('resources/images/salesmart/history-icon.png'); ?>" />
                    <div>History</div>
                </a>
                <a href="<?=base_url("account");?>" class="nav-link ">
                    <img class="bottom-header-icon" src="<?= base_url('resources/images/salesmart/account-icon.png'); ?>" />
                    <div>Account</div>
                </a>
            </div>
        </header>
    </section>