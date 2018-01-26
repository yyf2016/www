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
$id=$_POST['id'];
$src=$_FILES['img']['tmp_name'];
if($_FILES['img']['error']==0){
	$image=time().'-'.mt_rand().".{$imagePath['extension']}";
	$dst='../../public/uploads/'.$image;
	if(move_uploaded_file($src,$dst)){
		thumb($dst,200,200);
		$sqlShop="update shop set name='{$name}',price='{$price}',stock='{$stock}',upshelf='{$upshelf}',image='{$image}',brand_id='{$brand_id}' where id='{$id}'";
		if(mysql_query($sqlShop)){
			echo "<script>alert('finish!')</script>";
			echo "123<script>location='index.php'</script>";
		}else{
			echo "456<script>location='add.php?id={$id}'</script>";
		}	

	}
}
	elseif($_FILES['img']['error']==4){

	    $sqlShop="update shop set name='{$name}',price='{$price}',stock='{$stock}',upshelf='{$upshelf}',brand_id='{$brand_id}' where id='{$id}'";
	    // echo $sqlShop;
	    // exit;
		if(mysql_query($sqlShop)){
			echo "<script>alert('finish!')</script>";
			echo "123<script>location='index.php'</script>";
		}else{
			echo "789<script>location='add.php?id={$id}'</script>";
		}	
}else{

			echo "abc<script>location='add.php?id={$id}'</script>";
	}

?>