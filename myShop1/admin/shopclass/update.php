<?php
$id=$_POST["id"];
$shopname=$_POST["shopname"];
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlShopname="update shopclass set shopname='{$shopname}' where id={$id}";
$rstShopname=mysql_query($sqlShopname);
if($rstShopname){
	echo "<script>alert '修改成功!'</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert '修改失败！'</script>";
	echo "<script>location='index.php'</script>";
}
?>