<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header-bg">
	<div class="wrap"> 
		<div class="h-bg">
		<div class="total">
				<div class="header"> 
						<div class="logo"><a href="index.php"><img src="/EasyMVC/views/images/logo.jpg" alt=""/></a></div>
						<div class="clear"></div> 
				</div>	
		<div class="menu"> 	
			<div class="top-nav"> 
					<ul>
						<li><a href="home">Home</a></li>
						<li><a href="/EasyMVC/machine/special">Specials</a></li>
						<li><a href="/EasyMVC/new/news">New</a></li>
						<li class="active"><a href="index/contact">Contact</a></li>
						<?php if($_SESSION['username'] == null){ ?>
						<li><a href="signin">log in</a></li>
						<?php }else{?>
						<li><a href="logout">log out</a></li>
						<?php }?>
					</ul>
					<div class="clear"></div> 
			</div>
		</div>
		<center>
		<div class="banner-top">
			<div class="header-bottom">
				 <div class="header_bottom_right_images">
				 	<div class="about_wrapper"><h1>惟盛機電股份有限公司<span class="mobile-break"> &nbsp; WAY SHINE ELECTRIC CO.,LTD.</span></h1></div>
				</div>
		    <div class="section group">
				<div class="col span_2_of_c">
				  <div class="contact-form" style="font-size:20px">
				  	</br><div>地址:42054 台中市豐原區圓環北路一段32號</div><br>
                    	 <div>Address:No.32, Sec. 1, Yuanhuan N. Rd., Fengyuan Dist., Taichung City 420, Taiwan</div><br>
                         <div class="col-sm-5 col-lg-4">
                            <p><span>tel 電話:&nbsp;&nbsp; +886-4-2520-5571</span></p>
                         </div>
                         <div class="col-sm-5 col-lg-4">
                            <p><span>fax 傳真:&nbsp;&nbsp; +886-4-2520-3581</span></p>
                         </div><br>
                    <p><a href="mailto:tech-index@umail.hinet.net">Email:tech-index@umail.hinet.net</a></p>
				  </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="copy">
					<p>All rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
				</div>
			</div>
			</div>
		</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>

    	
    	
            