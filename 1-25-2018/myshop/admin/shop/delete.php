<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$id=$_GET['id'];
$sqlUser="delete from shop where id={$id}";
$image=$_GET['image'];
$sPath="../../public/uploads/s-".$image;
$bPath="../../public/uploads/".$image;
if(mysql_query($sqlUser)){
	unlink($sPath);
	unlink($bPath);
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='index.php'</script>";	

}
 ?>