<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录耐斯家具商城</title>
<link rel="stylesheet" type="text/css" href="./Css/login.css">
<link rel="stylesheet" type="text/css" href="./Css/zeroModal.css">
</head>
<body>

<script src="Javascript/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="Javascript/zeroModal.min.js"></script>
<div class="logo_box">
	<h3>Nice欢迎你</h3>
	<form action="loginController.php" id="login_form" method="post">
		<div class="input_outer">
			<span class="u_user"></span>
			<input type="text" name="username" id="username" class="text" placeholder="请输入用户名">
		</div>
		<div class="input_outer">
			<span class="us_uer"></span>
			<label class="l-login login_password" style="color: rgb(255, 255, 255);display: block;"></label>
			<input name="password" id="password" class="text" type="password" placeholder="请输入密码">
		</div>

		<div class="mb2"><a class="act-but submit"  style="color: #FFFFFF">登录</a></div>

		<input name="savesid" value="0" id="check-box" class="checkbox" type="checkbox"><span>记住用户名</span>
	</form>
	

	
	<div class="sas">
		<a href="./register.php">还没注册账号！</a>
	</div>
	<div class="sas">
		<a href="#" style="color: red;">Nice家具，亲购物，轻生活！</a>
	</div>
</div>

</body>
<script type="text/javascript" src="./Javascript/login.js"></script>

</html>
<?php
	if(!empty($_GET['error'])){
		$error=$_GET['error'];
		if($error==1){
			echo "<script type='text/javascript'>";
			echo "zeroModal.alert('账号或密码错误，请检查你的账号和密码');";
			echo "</script>";
		}
	}
?>