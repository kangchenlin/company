<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
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
						<div class="logo"><a href="home"><img src="/EasyMVC/views/images/logo.jpg" alt="" /></a></div>
						<div class="clear"></div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href="home">Home</a></li>
								<li><a href="specials">Specials</a></li>
								<li><a href="new">News</a></li>
								<li><a href="contact">Contact</a></li>
								<?php if($_SESSION['username'] == NULL){ ?>
								<li class="active"><a href="signin">log in</a></li>
								<?php }else{?>
								<li class="active"><a href="logout">log out</a></li>
								<?php }?>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div><br>
				<center>
					<form class="form-horizontal" role="form" method="POST" ID="SAVE" NAME="SAVE" action="memberadd">
							<h1 class="page-title"><span class="glyphicon glyphicon-user"></span>註冊會員 </h1>
							<div class="control-group">
								<label id="jform_name" for="jform_name" class="hasTooltip required" title="輸入會員的姓名">姓  　   名 ｜<span class="star">&#160;*</span></label>
								<input class="inputbox" id="memName" name="memName" value="" size="40" required aria-required="true" />
							</div><br>
							
							<div class="control-group">
								<label id="jform_username" for="memAccount" class="hasTooltip required" title="輸入會員的登入名稱（帳號）">帳      　號 ｜<span class="star">&#160;*</span></label>
								<input type="account" id="memAccount" name="memAccount" value="" class="inputbox" size="40" required aria-required="true" />
							</div><br>
				
							<div class="control-group">
								<label id="memberPassword" for="memPassword" class="hasTooltip" title="輸入會員的密碼">密     　 碼 ｜<span class="star">&#160;*</span></label>
								<input type="password" id="memPassword" name="memPassword" value="" class="inputbox" size="40" maxlength="10" />
							</div><br>
						
							<div class="control-group">
								<label id="jform_password2" for="memPasswordC" class="hasTooltip" title="確認會員的密碼">再次輸入密碼｜<span class="star">&#160;*</span></label>
								<input type="password" name="memPasswordC" id="memPasswordC" value="" class="inputbox" size="40" maxlength="10" onkeyup="pw()" /><span id="tishi"></span>
							</div><br>

							<div class="control-group">
								<label id="jform_email" for="memPhone" class="hasTooltip required" title="輸入會員的手機號碼">手機號碼｜<span class="star">&#160;*</span></label>
								<input type="phone" id="memPhone" name="memPhone" value="0912345678" class="inputbox" maxLength="10" size="40" required aria-required="true" onkeyup="value=value.replace(/[^\d]/g,'') " onfocus="cleartext(this)" onblur="resettext(this)" />
							</div><br>

							<div class="control-group">
								<label id="jform_email" for="memEmail" class="hasTooltip required" title="輸入會員的電子郵件">電子郵件｜<span class="star">&#160;*</span></label>
								<input type="email" id="memEmail" name="memEmail" value="aa@yahoo.com.tw" class="inputbox" size="40" required aria-required="true" onfocus="cleartext(this)" onblur="resettext(this)" />
							</div>
							<script type="text/javascript">
								function resettext(id) {
									//恢復文字
									if (id.value == "") {
										id.value = id.defaultValue;
										id.className = "t1";
									}
								}
								function cleartext(id) {
									//清除文字
									id.value = "";
									id.className = "";
								}
							</script>
							<br>
							<input name="add" type="submit" class="btn btn-danger" value="Sign up">
							<button name="cancel" class="btn btn-warning" onclick="location='../views/index.php'">cancel</button>
					</form>
					<script>
						function pw() {
							var pw1 = document.getElementById("memPassword").value;
							var pw2 = document.getElementById("memPasswordC").value;
							
							if (pw1 == pw2) {
								document.getElementById("tishi").innerHTML = "<font color='green'>兩次密碼相同</font>";
								document.getElementById("submit").disabled = false;
							}
							else {
								document.getElementById("tishi").innerHTML = "<font color='red'>兩次密碼不相同</font>";
								document.getElementById("submit").disabled = true;
							}
						}
					</script>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
