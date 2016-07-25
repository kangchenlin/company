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
	<title>Sign in</title>
	<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8"/>
	<script src="/EasyMVC/views/js/prefixfree.min.js"></script>
	<link href="/EasyMVC/views/css/login.css" rel="stylesheet" type="text/css" media="all" />
	<script src="/EasyMVC/views/js/login.js"></script>
</head>
<body>
	<div class="header-bg">
		<div class="wrap">
			<div class="h-bg">
				<div class="total">
					<div class="header">
						<div class="logo">
							<a href=""><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href="home">Home</a></li>
								<li><a href="/EasyMVC/machine/special">Specials</a></li>
								<li><a href="/EasyMVC/new/news">New</a></li>
								<li><a href="contact">Contact</a></li>
								<?php if($_SESSION['username'] == null){ ?>
								<li class="active"><a href="signin">log in</a></li>
								<?php }else{?>
								<li class="active"><a href="logout">log out</a></li>
								<?php }?>
							</ul>
							<div class="clear"></div>
						</div>
					</div><br>
					<form method="post" action="login">
						<div class="box">
							<div class="grad">
								<div class="login">
									<input type="text" placeholder="username" name="memAccount"><br>
									<input type="password" placeholder="password" name="memPassword"><br>
									<input name="login" type="submit" class="btn" value="Login">
									<button name="submit" class="btn"><a href="register">Sign up</button>
								</div>
							</div>
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

