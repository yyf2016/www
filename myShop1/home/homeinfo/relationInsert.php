<?php 
session_start();
header("content-type:text/html;charset:utf-8");
// echo"<pre>";
// print_r($_SESSION);
// echo"</pre>";
$realname=$_POST['realname'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$user_id=$_SESSION['user_id'];
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlRelation="insert into relation(realname,address,telephone,email,user_id) values('{$realname}','{$address}','{$telephone}','{$email}','{$user_id}')";
// echo $sqlRelation;
mysql_query($sqlRelation);
if(mysql_affected_rows()){
	echo"<script>location='center.php'</script>";
}else{
	echo"<script>alert('添加失败！')</script>";
	echo"<script>location='relation.php'</script>";
}
?>