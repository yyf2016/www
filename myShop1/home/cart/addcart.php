<?php 
session_start();
$id=$_GET['id'];
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$id=$_GET['id'];
$sqlShop="select * from shop where id={$id}";
$rstShop=mysql_query($sqlShop);
$rowShop=mysql_fetch_assoc($rstShop);
$_SESSION['shop'][$rowShop['shopname']]=$rowShop;
$_SESSION['shop'][$rowShop['shopname']]['num']=1;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<script>location='../homeinfo/account.php'</script>";
?>