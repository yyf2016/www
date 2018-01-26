<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$name=$_POST["name"];
$sqlShopclass="insert into shopclass(name) value('{$name}')";
$rstShopclass=mysql_query($sqlShopclass);
if($rstShopclass){
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='index.php'</script>";
}
?>
