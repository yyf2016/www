<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$brandname=$_POST['brandname'];
$shopclass_id=$_POST['shopclass_id'];
$sqlBrand="insert into brand(brandname,shopclass_id) values('{$brandname}','{$shopclass_id}')";

if(mysql_query($sqlBrand)){
	echo "<script>alert'添加成功'</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert'添加失败'</script>";
	echo "<script>location='index.php'</script>";
}
?>