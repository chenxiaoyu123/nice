<?php
	require_once 'SqlHelper.class.php';
	session_start();
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['checkcode'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$checkcode=$_POST['checkcode'];
	}else{
		header("Location:register.php");
	}
	if($checkcode!=$_SESSION['checkcode']){
		header("Location:register.php?error=1");
	}
	$sqlheler=new SqlHelper();
	$sql="insert into user(username,password) values('$username','$password') "; 
	$b=$sqlheler->execute_dml($sql);
	if($b==1){
		header("Location:registersuccess.html");
	}else{
		header("Location:registerfail.html");
	}
?>