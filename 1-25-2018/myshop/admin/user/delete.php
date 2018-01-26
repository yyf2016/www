<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
include '../../public/common/acl.inc.php';
$id=$_GET['id'];
$sqlUser="delete from user where id={$id}";
if(mysql_query($sqlUser)){
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='index.php'</script>";	

}
 ?>