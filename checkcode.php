<?php 
	session_start();
	header("content-type:image/jpeg");
	$image_width=200;
	$image_height=50;
	$checkcode="";
	for($i=0;$i<4;$i++)
	{
		$checkcode.=dechex(rand(0, 15));
	}
	$_SESSION['checkcode']=$checkcode;
	$num_image=imagecreate($image_width, $image_height);
	imagecolorallocate($num_image, 0, 0, 0);
	for($i=0;$i<strlen($_SESSION['checkcode']);$i++)
	{
		$font=mt_rand(100, 125);
		$x=mt_rand(2, 8)+$image_width*$i/4;
		$y=mt_rand(1, $image_height/4);
		$color=imagecolorallocate($num_image, mt_rand(0, 100), mt_rand(0, 150), mt_rand(0, 200));
		imagestring($num_image, $font, $x, $y, $_SESSION['checkcode'][$i], $color);
	}
	imagejpeg($num_image);
	imagedestroy($num_image);
?>