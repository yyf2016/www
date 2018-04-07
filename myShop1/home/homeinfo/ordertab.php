<?php 
session_start();
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$relation_id=$_GET['relation_id'];
$code=time().mt_rand();
$ordertime=time();
$orderstat_id=1;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
foreach($_SESSION['shop'] as $row_shop){
	$sqlOrdertab="insert into ordertab(code,shop_id,num,user_id,ordertime,orderstat_id) values('{$code}','{$row_shop['id']}','{$row_shop['num']}','{$_SESSION['user_id']}','{$ordertime}','{$orderstat_id}') ";
	echo $sqlOrdertab;
	echo "</br>";
	mysql_query($sqlOrdertab);
}
echo "<script>location='center.php'</script>";

?>