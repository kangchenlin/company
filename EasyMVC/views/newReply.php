<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>reply</title>
	<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reply</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<style>
 .container{
  margin:auto;
  background-color:#f5f5f5;
  width:800px;
  padding-bottom: 20px;
 }
 .button{
  text-align:center;
  padding:20px 0;
 }
 .top h3{
  font-family:微軟正黑體;
  text-align:center;
  padding:10px 0;
 }
 .form-group{
  font-family:微軟正黑體;
  font-size:16px;
 }
</style>
<body>
	<div class="header-bg">
		<div class="wrap">
			<div class="h-bg">
				<div class="total">
					<div class="header">
						<div class="logo">
							<a href="/EasyMVC/index/home"><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href="/EasyMVC/index/home">Home</a></li>
								<li><a href="/EasyMVC/machine/special">Specials</a></li>
								<li class="active"><a href="/EasyMVC/new/news">New</a></li>
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
					<div class="container">
						<div class="top">
							<h3>回覆留言</h3>
						</div>
						<form id="form1" name="form1" method="post" action="replyupdate" class="form-horizontal">
				    	<div class="form-group">
				    		<div class="form-group">
				    			<input type="hidden" value="<?php echo  $_GET['ID'] ?>" name="ID">
				    			名字:<input type="text" class="form-control" placeholder="您的名字" value="<?php echo $data['guestName'] ?>" name="$guestName" readonly>
				    		</div>
				    	</div>
				    	<div class="form-group">
				    		<div class="form-group">
				    			信箱：<input type="text" class="form-control" placeholder="您的信箱" name="guestEmail" value="<?php echo $data['guestEmail'] ?>" readonly/>
				    		</div>
				    	</div>
				    	<div class="form-group">
				    		<div class="form-group">
				    			留言主旨：<input type="text" class="form-control" name="guestSubject" id="guestSubject" value="<?php echo $data['guestSubject'] ?>" readonly/>
				    		</div>
				    	</div>
    					<div class="form-group">
    						<div class="form-group">
    							留言內容：<textarea name="guestContent" class="form-control" id="guestContent" rows="5" readonly><?php echo $data['guestContent'] ?></textarea>
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="form-group">
    							回覆內容：<textarea name="guestReply" class="form-control" id="guestReply" rows="5" ><?php echo $data['guestReply'] ?></textarea>
    						</div>
    					</div>
    				</div>
    				<center>
    				<div>
    					<input type="submit" class="btn btn-default" name="button" id="button" value="Save" />
    				</div>
    				</center>
    				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>