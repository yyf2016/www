<?php
$username=$_POST["username"];
$password=md5($_POST["password"]);
$repassword=md5($_POST["repassword"]);
$regtime=time();
$isAdmin=$_POST["isAdmin"];
// print_r($_POST);
// exit;
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlUser="insert into user(username,password,regtime,isAdmin) values('$username','{$password}',{$regtime},{$isAdmin})";
// echo $sqlUser;
// exit;
if($password===$repassword){
	if(mysql_query($sqlUser)){
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>location='add.php'</script>";
	}
	
}else{
	echo "两次密码不相同！";
}
?>