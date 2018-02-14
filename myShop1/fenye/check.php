<?php
session_start();
header("content-type:text/html;charset=utf-8");
$vcode=strtolower($_POST["vcode"]);
if($vcode==$_SESSION["vcode"]){
	echo "<script>alert('验证码正确！')</script>";
}else{
	echo "<script>alert('验证码不正确！')</script>";
}
?>