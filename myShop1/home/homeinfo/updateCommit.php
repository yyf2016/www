<?php 
session_start();
$location=$_SERVER['HTTP_REFERER'];
// echo "<pre>";
// print_r($location);
// echo "</pre>";
// exit;
if($_SESSION['login']==1){
	$time=time();
	$commit=$_POST['commit'];
	$user_id=$_SESSION['user_id'];
	$shop_id=$_POST['shop_id'];
	$sqlCommit="insert into commit (user_id,shop_id,time,content) values('{$user_id}','{$shop_id}','{$time}','{$commit}')";
	mysql_connect("localhost","root","123asd");
	mysql_select_db("myshop1");
	mysql_query("set names utf8");
	mysql_query($sqlCommit);
	// echo $sqlCommit;
	// exit;
	if(mysql_num_rows){
		echo "<script>location='{$location}'</script>";
	}else{
		echo "<meta charset='utf-8'>";
	    echo "<script>alert('输入有误，请重新输入！')</script>";
	}
}else{
	echo "<meta charset='utf-8'>";
	echo "<script>alert('请登录！')</script>";
	echo "<script>location='{$location}'</script>";
}
?>