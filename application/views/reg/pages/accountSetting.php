<style>
 h4.menu{
 	color:#1873b8;
 	font-size:2em;
 	font-weight:600;
 }
 ul.menu{
 	color:#1873b8;
 	font-size:1em;	
 	width:
 }
 ul.menu li{
 	color:#1873b8;
 	font-size:1.5em;
 	padding-top:20px;
 	border-bottom:2px solid #1873b8;
 	font-weight:500;
 	padding-bottom:20px;
 }

ul.menu li a,
ul.menu li a:hover{
	color:#1873b8;
	text-decoration:none;
}

.account_menu{
 	padding:50px;	
}

</style>
<div class="account_menu container">
<h4 class="menu">SETTING</h4>
<ul class="menu">
	<li><a href="<?=base_url('account'); ?>">Profile</a></li>
	<li><a href="#">Privacy Policy</a></li>
	<li><a href="#">Terms &amp; Conditions</a></li>
	<li><a href="<?=base_url('logout'); ?>">Log Out</a></li>
</ul>
</div>