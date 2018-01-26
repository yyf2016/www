<?php 
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop");
mysql_query("set names utf8");
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$id=$_POST['id'];
$isAdmin=$_POST['isAdmin'];
if($password===$repassword){
	$sqlUser="update user set username='$username' , password='$password', admin='$isAdmin' where id={$id}";
	if(mysql_query($sqlUser)){
		echo "123<script>location='index.php'</script>";
	}else{
		echo "456<script>location='edit.php'</script>";
	} 
}else{
	echo "789<script>location='edit.php'</script>";
}
