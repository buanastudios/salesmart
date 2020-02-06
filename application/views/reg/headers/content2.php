    <!-- CONTENT HEADER -->
    <!--::header part start::-->
    <!-- <header class="main_menu home_menu"> -->    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand" href="index"> <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/companylogo.png" alt="logo"> </a>
                        <!-- <button class="btn white" href="#"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>                
                        <div class="navbar-collapse main-menu-item justify-content-start"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item avatar">
                                    <a class="nav-link p-0" href="#">
                                      <img src="<?php echo base_url(IMAGEPATH);?>/salesmart/photo-sakti.png" class="account_avatar rounded-circle z-depth-0"
                                        alt="avatar image" height="65">
                                        <div><span>Arti Hikmatullah Perbawana Sakti Buana</span></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    Choose Client
                                </li>                                                                                        
                                <li class="nav-item">
                                    Choose Store
                                </li>
                                <li class="nav-item">
                                    Favorite
                                </li>
                                <li class="nav-item">
                                    History
                                </li>
                                <li class="nav-item">
                                    My Account
                                </li>
                                <li class="nav-item">
                                    Setting
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        General Information
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="registration.php">About Company</a>
                                        <a class="dropdown-item" href="registration.php">Contact Us</a>
                                        <a class="dropdown-item" href="course-list">Privacy Policy</a>
                                        <a class="dropdown-item" href="course-list">Terms &amp; Conditions</a>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                        <form class="form-inline my-2 my-lg-0">
                        <div class="input-group mb-2 mr-sm-2" style="width:600px;">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="color: Dodgerblue;"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                        </div>
                        </form>                     
                        <span class="navbar-text border-left-1 mx-auto" style="height: 53px;"><a id="maincompanyname">PT COMPANY BERSAMA</a></span>
                        <span class="navbar-text border-left-1 " style=""><a id="cartbutton"><img src="<?= base_url('').'resources/images/salesmart/cart-white.png';?>"></a></span>
                        <span class="navbar-text border-left-1 my-2 mx-auto" style=""><a id="chatbutton"><img src="<?= base_url('').'resources/images/salesmart/chat-white.png';?>"></a></span>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->