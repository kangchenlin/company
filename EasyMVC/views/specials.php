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
	<title>Specials</title>
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
						<div class="logo"><a href=""><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a></div>
						<div class="clear"></div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href="/EasyMVC/index/home">Home</a></li>
								<li class="active"><a href="special">Specials</a></li>
								<li><a href="/EasyMVC/new/news">New</a></li>
								<li><a href="/EasyMVC/index/contact">Contact</a></li>
								<?php if($_SESSION['username'] == null){ ?>
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
								<div class="content-wrapper">
									<div class="content-top">
										<?php if($_SESSION['username'] == 'admin' ) {?>
											<button class="button"><a href="machinenew"><span>New</span></a></button>
										<?php } ?>
										<div class="about_wrapper">
											<h1>Specials</h1>
										</div>
										<?php
											foreach($data['resultArray'] as $rs){
										?>
										<div class="text">
											<div class="grid_1_of_3 images_1_of_3">
												<div class="grid_1">
<<<<<<< HEAD
													<a href="single?ID=<?php echo $rs['ID']?>"><img src="/EasyMVC/<?php echo $rs['filename'] ?>" width="450px" height="300px" onerror="this.src='../views/images/about.jpgg'"></a>
=======
													<a href="single?ID=<?php echo $rs['ID']?>"><img src="/EasyMVC/<?php echo $rs['filename'] ?>" width="450px" height="300px" onerror="this.src='../views/images/about.jpg'"></a>
>>>>>>> ee12b8995c31706cddfb952b57c484f69fc45152
													<div class="grid_desc">
														<p class="title">
															<?php echo $rs['maName'] ?>
														</p>
														<div class="cart-button">
															<div class="cart">
																<button class="button"><a href="single?ID=<?php echo $rs['ID']?>"><span>Details</span></a></button>
															</div>
															<?php if($_SESSION['username'] == 'admin' ) {
																	echo '<button class="button"><a href="machinedelete?ID='.$rs['ID'].'&filename='.$rs['filename'].'&maImage='.$rs['maImage'].'&maImage_1='.$rs['maImage_1'].'"><span>Delete</span></a></button>';
																	echo '<button class="button"><a href="machineedit?ID='.$rs['ID'].'"><span>Edit</span></a></button>';
																  }
														 	?>
															<div class="clear"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php }?>
										<div class="clear"></div>
										<div class="paging">
											<p align="center">頁數:
												<?php
												//輸出直接跳頁的連結
												for($i=1;$i<=$data['pages'];$i++){
													echo "<a href=special?page=$i>$i</a>"; 
												}
												?>
											</p>
											<p align="center">第
												<?php echo $data['p']?>頁/共有
												<?php echo $data['pages']?>頁</p>
											<p>&nbsp;</p>
										</div>
										<div class="clear"></div>
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
			</div>
		</div>
	</div>
</body>
</html>
