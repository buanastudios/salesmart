        <div id="login">
            <h1><img src="<?php echo base_url('resources/images/salesmart/header-login.png'); ?>" alt="SalesMart" 
            
            ></h1>
            <h2>LOGIN</h2>
            <form id="loginform">
                <div class="form-group has-feedback">
                    <input type="text" name="log" id="user_login" class="input form-control" size="20" placeholder="Email Address" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="pwd" id="user_pass" class="input form-control" value="" size="20" placeholder="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>                

                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary button-large" value="Log In">
                </p>

                <p class="forgot">
                    <span class="spaceholder">&nbsp;</span><a href="forgot">Forgot Password</a>
                </p>
            
            </form>
        </div> <!-- /login -->