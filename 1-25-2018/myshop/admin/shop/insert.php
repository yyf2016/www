<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
include '../../public/common/functions.inc.php';
$shopname=$_POST['name'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$upshelf=$_POST['upshelf'];
$brand_id=$_POST['brand_id'];
$imageName=$_FILES['img']['name'];
$imagePath=pathinfo($imageName);
$src=$_FILES['img']['tmp_name'];
$image=time().'-'.mt_rand().".{$imagePath['extension']}";
$dst='../../public/uploads/'.$image;
if(move_uploaded_file($src,$dst)){
	thumb($dst,200,200);
	$sqlUser="insert into shop(name,price,stock,upshelf,image,brand_id) value('$name','$price','$stock','$upshelf','$image','$brand_id')";
	if(mysql_query($sqlUser)){
		echo "<script>alert('finish!')</script>";
		echo "123<script>location='index.php'</script>";
	}else{
		echo "456<script>location='add.php'</script>";
	}	

}

 ?>