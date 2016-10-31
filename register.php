<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>耐斯家具商城注册</title>
<link rel="stylesheet" type="text/css" href="./Css/register.css">
<link rel="stylesheet" type="text/css" href="./Css/zeroModal.css">
<link rel="stylesheet" type="text/css" href="./Css/zeroModal.css">
</head>
<script src="Javascript/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="Javascript/zeroModal.min.js"></script>

<body>


<h3>Nice家具 让你的生活更Nice</h3>
<div class="logo_box">
	
	<form action="registerController.php" id="register_form" method="post">
		<div class="input_outer">
			<span class="u_user"></span>
			<input type="text" name="username" id="username" class="text" placeholder="请输入用户名手机或邮箱">

		</div>
		
		<div class="input_outer">
			<span class="us_uer"></span>
			<label class="l-login login_password" style="color: rgb(255, 255, 255);display: block;"></label>
			<input name="password" id="password" class="text" type="password" placeholder="请输入密码">
		</div>
	
		<div class="input_outer">
			<span class="us_uer"></span>
			<label class="l-login login_password" style="color: rgb(255, 255, 255);display: block;"></label>
			<input name="repassword" id="repassword" class="text" type="password" placeholder="请再次输入密码">
		</div>
		
		<div class="input_outer">
			<span class="us_uer"></span>
			<label class="l-login login_password" style="color: rgb(255, 255, 255);display: block;"></label>
			<input name="checkcode" id="checkcode" class="text" type="text" placeholder="请输入验证码">
		</div>
		
			
		<img class="checkcode" src="checkcode.php" onclick="this.src='checkcode.php?a='+Math.random()">
		
		<div class="mb2"><a class="act-but submit"  style="color: #FFFFFF">注册</a></div>
		
	</form>
	<div class="sas">
		<a href="./login.php">已有账号？马上登录</a>
	</div>
	<div class="sas">
		<a href="index.html" style="color: red;">Nice家具，亲购物，轻生活！</a>
	</div>
</div>
<div class="hint">
<p>用户名可使用字母、汉字、数字、下划线或其组合，4～20个字符</p>
<p>6-20位，支持字母、数字或符号的组合，不可单独使用字母、数字或符号</p>
<p>请确保两次输入的密码一致</p>
<p>请输入验证码</p>
</div>
</body>
<script type="text/javascript" src="./Javascript/register.js"></script>

</html>
<?php
	if(!empty($_GET['error'])){
		$error=$_GET['error'];
		if($error==1){
			echo "<script type='text/javascript'>";
			echo "zeroModal.alert('验证码错误');";
			echo "</script>";
		}
	}
?>