<?php
$id=$_GET['id'];
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query('set names utf8');
$sqlShop="delete from shop where id={$id}";
$rstShop=mysql_query($sqlShop);
if(mysql_affected_rows($rstShop)){
	echo"<script> alert('删除成功！')</script>";
	echo"<script>location='index.php'</script>";
}else{
	echo"<script>alert('删除失败！')</script>";
	echo"<script>location='index.php'</script>";
}
 ?>