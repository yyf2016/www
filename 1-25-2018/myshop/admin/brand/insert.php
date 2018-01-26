<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$brandname=$_POST['name'];
$shopclass_id=$_POST['shopclass_id'];
	$sqlUser="insert into brand(name,shopclass_id) value('$brandname','$shopclass_id')";
	if(mysql_query($sqlUser)){
		echo "123<script>location='index.php'</script>";
	}else{
		echo "456<script>location='add.php'</script>";
	}	



 ?>