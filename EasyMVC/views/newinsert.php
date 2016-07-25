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
	<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Made a new</title>
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
							<a href="index.php"><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href="/EasyMVC/index/home">Home</a></li>
								<li><a href="special">Specials</a></li>
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
							<h3>新增留言</h3>
						</div>
				    <form id="form1" name="form1" method="post" action="newadd" class="form-horizontal">
				    	<div class="form-group">
				    		<label for="memName" class=" control-label">名字：<?php echo $data['memName'] ?></label>
				    		<div class="form-group">
				    			<input type="hidden" class="form-control" placeholder="您的名字" value="<?php echo $data['memName'] ?>" name="memName">
				    			<input  style="visibility:hidden" type="hidden"  name="ID" value="<?php echo $data['ID'] ?>" />
				    		</div>
				    	</div>
				    	<div class="form-group">
				    		<label for="memEmail" class=" control-label">信箱：<?php echo $data['memEmail'] ?></label>
				    		<div class="form-group">
				    			<input type="hidden" class="form-control" placeholder="您的信箱" name="memEmail" value="<?php echo $data['memEmail'] ?>" />
				    		</div>
				    	</div>
				    	<div class="form-group">
				    		<label for="guestSubject" class=" control-label">留言主旨：</label>
				    		<div class="form-group">
				    			<input type="text" class="form-control" name="guestSubject" id="guestSubject" />
				    		</div>
				    	</div>
    					<div class="form-group">
    					<label for="guestContent" class="control-label">留言內容：</label>
    						<div class="form-group">
    							<textarea name="guestContent" class="form-control" id="guestContent" rows="5"></textarea>
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