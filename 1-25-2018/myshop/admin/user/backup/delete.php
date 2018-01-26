<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$id=$_GET['id'];
$sqlDelete="delete from user where id={$id}";
if(mysql_query($sqlDelete)){
	echo "<script>location='index.php'</script>";
}
?>