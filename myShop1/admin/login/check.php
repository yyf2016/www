<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$code=strtolower($_POST['code']);
if($code==strtolower($_SESSION['code'])){
	mysql_connect("localhost","root","123asd");
	mysql_select_db("myshop1");
	mysql_query("set names utf8");
	$sqlUser="select * from user where username='{$username}'";
	$rstUser=mysql_query($sqlUser);
	while($rowUser=mysql_fetch_assoc($rstUser)){
		if($rowUser['password']==$password){
			$_SESSION['username']=$rowUser['username'];
			$_SESSION['isAdmin']=$rowUser['isAdmin'];
            echo"<script>location='../index.php'</script>";
		}else{
			echo"<script>alert('用户名或密码输入错误！')";
			echo"<script>location='login.php'";
		}
	}


}else{
	echo"<script>alert('验证码错误！')";
	echo"<script>location='login.php'</script>";
}
?>