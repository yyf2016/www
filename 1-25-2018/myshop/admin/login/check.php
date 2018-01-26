<?php
session_start();
include '../../public/common/dbconfig.inc.php';
$username=$_POST['textfield'];
$password=md5($_POST['textfield2']);
$sqlUser="select * from user where username='{$username}' and password='{$password}'";
$rstUser=mysql_query($sqlUser);

if ($rowUser=mysql_fetch_assoc($rstUser)){
         $_SESSION['username']=$username;
         $_SESSION['admin']=$rowUser['admin'];
         $_SESSION['login']=1;
         echo "<script>location='../frame/index.php'</script>";
}else{
	echo "<script>location='login.php'</script>";
}
?>