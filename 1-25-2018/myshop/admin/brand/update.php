<?php 
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop");
mysql_query("set names utf8");
$name=$_POST['name'];
$shopclass_id=$_POST['shopclass_id'];
$id=$_POST['id'];
$sqlUser="update brand set name='$name' , shopclass_id='$shopclass_id' where id={$id}";
	if(mysql_query($sqlUser)){
		echo "123<script>location='index.php'</script>";
	}else{
		echo "456<script>location='edit.php'</script>";
	} 
