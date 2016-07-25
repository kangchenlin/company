<!DOCTYPE HTML>
<html>
<head>
	<title>New Specials</title>
	<link href="/EasyMVC/views/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/EasyMVC/views/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style>
.inputbox{
	border-radius: 10px 10px;
}
</style>
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
									<h1>CATALOGUE</h1>
                                <form class="form-horizontal" method = "POST" action="machineinsert" enctype="multipart/form-data">
		                            <div class="control-group">
						                <label class="hasTooltip required" title="<strong>產品圖片</strong><br />">產品圖片<span class="star">&#160;*</span></label>
					                    <div class="controls">
						                <input class="inputbox" type="file" name="uploadfile[0]" multiple="" />
					                    </div>
					                    
					                    <label class="hasTooltip required" title="<strong>規格列表</strong><br />">規格列表<span class="star">&#160;*</span></label>
					                    <div class="controls">
					                    <input class="inputbox" type="file" name="uploadfile[1]" multiple="" />
						                <input class="inputbox" type="file" name="uploadfile[2]" multiple="" />
					                    </div>
					                    
	                                    <label class="hasTooltip required" title="<strong>機器名稱</strong><br />">機器名稱<span class="star">&#160;*</span></label>
						                <div class="controls">
						                <textarea class="form-control" cols="90" rows="3" id="maName" name="maName" value=""></textarea>
						                </div>
					
										<label class="control-label" for="maClass">機器類別:</label>
										<div class="controls">
										    <input class="form-control" type="inputbox" id="maClass" name="maClass" value="" />
										</div>
	
										<label class="control-label" for="maExplain">詳細說明:</label>
										<div class="controls">
										    <textarea class="form-control" style="width:600px;height:100px;" id="maExplain" name="maExplain" value="" ></textarea>
										</div>

		                                <div><input class="btn btn-default" name="submit" type="submit" value="Save"></div>
			                        </div>
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
</body>
</html>
