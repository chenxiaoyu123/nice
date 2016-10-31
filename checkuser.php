<?php
	require_once 'SqlHelper.class.php';
	
	if(isset($_GET['username'])){
		$username=$_GET['username'];

		$sql="select username from user where username='$username'";
		$sqlhelper=new SqlHelper();
		$b=$sqlhelper->execute_dql2($sql);
		
		if(!empty($b)){
			echo 1;
		}else{
			echo 0;
		}

	}else{
		header('Location:register.php');
	}
?>