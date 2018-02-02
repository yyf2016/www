<?php
$id=$_POST['id'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$isAdmin=$_POST['isAdmin'];
$conn=mysql_connect("localhost",'root','123asd');
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlUser="update user set username='{$username}',password='{$password}',isAdmin={$isAdmin} where id={$id}";
// print_r($sqlUser);
// exit;
if($password===$repassword){
	if(mysql_query($sqlUser)){
		echo "<script>alert('修改成功')</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('修改失败')</script>";
		echo "<script>location='index.php'</script>";
	}
}else{
	echo "<script>alert('密码不符')</script>";
}
?>