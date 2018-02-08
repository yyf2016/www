<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$shopclass=$_POST['shopclass'];
$sqlShopclass="insert into shopclass(shopname) values('{$shopclass}')";
if(mysql_query($sqlShopclass)){
	echo "<script>alert('添加成功')</script>";
	echo "<script>location='index.php'";
}else{
	echo "<script>alert('添加失败')</script>";
	echo "<script>location='add.php'</script>";
}
?>