<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Home</title>
	<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--slider-->
	<script src="/EasyMVC/views/js/jquery.min.js"></script>
	<script src="/EasyMVC/views/js/script.js" type="text/javascript"></script>
	<script src="/EasyMVC/views/js/superfish.js"></script>
</head>
<body>
	<div class="header-bg">
		<div class="wrap">
			<div class="h-bg">
				<div class="total">
					<div class="header">
						<div class="logo"><a href=""><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a></div>
						<div class="clear"></div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li class="active"><a href="home">Home</a></li>
								<li><a href="/EasyMVC/machine/special">Specials</a></li>
								<li><a href="/EasyMVC/new/news">new</a></li>
								<li><a href="contact">Contact</a></li>
								<?php if($_SESSION['username'] == null){ ?>
								<li><a href="signin">log in</a></li>
								<?php }else{?>
								<li><a href="logout">log out</a></li>
								<?php }?>
								
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="banner-top">
						<div class="header-bottom">
							<div class="header_bottom_right_images">
								<div id="slideshow">
									<ul class="slides">
										<li><a href=""><canvas ></canvas><img src="/EasyMVC/views/images/cnc2.jpg" width="1100px" height="500px"></a></li>
										<li><a href=""><canvas></canvas><img src="/EasyMVC/views/images/cnc3.jpg" width="1100px" height="500px"></a></li>
										<li><a href=""><canvas></canvas><img src="/EasyMVC/views/images/cnc1.jpg" width="1100px" height="500px"></a></li>
										<li><a href=""><canvas></canvas><img src="/EasyMVC/views/images/cnc4.jpg" width="1100px" height="500px"></a></li>
									</ul>
									<span class="arrow previous"></span>
									<span class="arrow next"></span>
								</div>
								<div class="about_wrapper"><h1>About us</h1></div>
				    			<div class="about-group">
		  							<div class="about-top">
										<div class="grid images_3_of_1"><img src="/EasyMVC/views/images/about.jpg" width="500px" height="300px"/></div>
										<div class="grid span_2_of_3" style="font-size:22px">
											<p style="font-family:DFKai-sb;">惟盛機電股份有限公司，為專業生產電腦數控分度盤的台灣企業，多年來不斷創新，並以「高效率、高技術、高品質」為目標，提供客戶最佳的產品與服務。</p>	
											<br><p style="font-family:DFKai-sb;">配合高精度、環保化與專業的生產體系，本公司所有產品從設計研發、加工製造到成品檢驗，均嚴格控管，
											且為了確保產品的高精度，引進了一系列先進的加工設備與檢測儀器，該檢測設備能自動完成各精度檢驗項目的測試並列印出數據報告，
											保證了數據的準確性，為綜欣分度盤產品的高品質做最後的把關。惟盛機電股份有限公司，放眼於國際，將不斷創新、前進，
											為客戶打造更優質的產品與服務。</p>	
										</div>
										<div class="clear"></div>
									</div>
								 </div>
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
</body>
</html>
