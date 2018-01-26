<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$regtime=time();
if($password===$repassword){
	$sqlUser="insert into user(username,password,regtime) value('$username','$password','$regtime')";
	if(mysql_query($sqlUser)){
		echo "123<script>location='index.php'</script>";
	}else{
		echo "456<script>location='add.php'</script>";
	}	

}else{
	echo "789<script>location='add.php'</script>";
}

 ?>