   <?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$id=$_GET['id'];
$sqlBrand="delete from brand where id={$id}";
if(mysql_query($sqlBrand)){
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>location='index.php'</script>";	

}
 ?>