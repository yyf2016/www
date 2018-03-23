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
	$sqlCommit="insert into commit (user_id,shop_id,time,commit) values('{$user_id}','{$shop_id}','{$time}','{$commit}')";
	echo $sqlCommit;
	exit;
}else{
	echo "<meta charset='utf-8'>";
	echo "<script>alert('请登录！')</script>";
	echo "<script>location='{$location}'</script>";
}
?>