<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$id=$_GET['id'];
$sqlUser="delete from shopclass where id={$id}";
if(mysql_query($sqlUser)){
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='index.php'</script>";	

}
 ?>