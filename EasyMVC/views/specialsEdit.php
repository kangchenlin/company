<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Edit Specials</title>
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
								<li><a href="/EasyMVC/index/news">New</a></li>
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
                                <form name = "form1" method = "POST" action="machineupdate" enctype="multipart/form-data">
								<div class="about-group">
									<div class="about-top">
										<div class="grid images_3_of_1">
										<img src="/EasyMVC/<?php echo $data['filename'];?>" width="450px" height="240px" onerror="this.src='../views/images/about.jpg'">
										<div class="control-group">
						                <input type="file" name="uploadfile[0]" multiple="" />
						                <input  type="hidden" value = "<?php echo $_GET['ID'];?>" name="ID">;
					                    </div>
										</div>
										
										<div class="grid span_2_of_3">
										    
											<div>機器名稱:<textarea cols="90" rows="3" id="maName" name="maName" ><?php echo $data['maName'];?></textarea></div>
											<div>機器類別:<input type="inputbox" id="maClass" name="maClass" value="<?php echo $data['maClass'];?>" /></div>
											<hr>
											<div>產品詳細說明:<textarea style="width:600px;height:100px;" id="maExplain" name="maExplain" ><?php echo $data['maExplain'];?></textarea></div>
											
										</div>
										<div class="clear"></div>
                                        
									</div>
                                    </div>
                                    <div><input class="btn btn-default" name="submit" type="submit" value="Save"></div>
									<hr>
									<h2 class="about-para">規格列表:</h2>
									<center>
									<img src="/EasyMVC/<?php echo $data['maImage']; ?>" />
									<hr>
									<img src="/EasyMVC/<?php echo $data['maImage_1']; ?>" />
									<div class="clear"></div>
									</center>
								</form>
								</div>
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
</body>
</html>