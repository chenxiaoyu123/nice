<?php
	require_once './SqlHelper.class.php';
	session_start();
	if(isset($_POST['username'])&&isset($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select password,username from user where username='$username'";
		$SqlHelper=new SqlHelper();
		$arr=$SqlHelper->execute_dql2($sql);
		if($password==$arr[0]['password']){
			$_SESSION['username']=$username;
			header("Location:main.php");
		}else{
			header('Location:login.php?error=1');
		}	
	}
	


	


?>