<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$id=$_GET["id"];
$sqlUser="delete  from user where id={$id}";
// echo $sqlUser;
// exit;
if(mysql_query($sqlUser)){
	echo "<script>alert('删除成功!')</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('删除失败！')</script>";
	echo "<script>location='index.php'</script>";
}

?>