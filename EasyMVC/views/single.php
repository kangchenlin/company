<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
	<title>Machine Details</title>
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
						<div class="header-bot">
							<div class="logo">
								<a href="index.html"><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href="/EasyMVC/index/home">Home</a></li>
								<li class="active"><a href="special">Specials</a></li>
								<li><a href="/EasyMVC/index/new">New</a></li>
								<li><a href="/EasyMVC/index/contact">Contact</a></li>
								<?php if($_SESSION['username'] == NULL){ ?>
								<li><a href="/EasyMVC/index/signin">log in</a></li>
								<?php }else{?>
								<li><a href="/EasyMVC/index/logout">log out</a></li>
								<?php }?>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					
					<div class="banner-top">
						<div class="header-bottom">
							<div class="header_bottom_right_images">
								<div class="about_wrapper">
									<h1>CATALOGUE</h1>
								</div>
								
								<div class="about-group">
									<div class="about-top">
										<div class="grid images_3_of_1">
											<img src="/EasyMVC/<?php echo $data["filename"] ?>" width="450px" height="240px" onerror="this.src='../views/images/about.jpg'"/>
										</div>
										<div class="grid span_2_of_3">
											<h3>機器名稱:<?php echo $data["maName"]?></h3>
											<h2>機器類別:<?php echo $data["maClass"]?></h2>
											<hr>
											<h3>產品詳細說明</h3>
											<h2><strong><?php echo $data["maExplain"]?></strong></h2>
										</div>
										<div class="clear"></div>
									</div>
									<hr>
									<h2 class="about-para">規格列表:</h2>
									<center>
									<img src="/EasyMVC/<?php echo $data["maImage"] ?>"/>
									<hr>
									<img src="/EasyMVC/<?php echo $data["maImage_1"] ?>"/>
									<div class="clear"></div>
									</center>
								</div>
							</div>
							
							<hr>
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