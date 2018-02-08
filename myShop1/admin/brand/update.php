<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");

$id=$_POST['id'];
$brandname=$_POST['brandname'];
$shopclass_id=$_POST['shopclass_id'];
$sqlBrand="update brand set brandname='{$brandname}',shopclass_id='{$shopclass_id}' where id={$id}";
if(mysql_query($sqlBrand)){
	echo "<script>alert('修改成功！')</script>";
}else{
	echo "<script>alert('修改失败！')</script>";
}
echo "<script>location='index.php'</script>";
?>