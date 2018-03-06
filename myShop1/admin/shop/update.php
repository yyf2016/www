<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$id=$_POST['id'];
$shopname=$_POST['shopname'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$upshelf=$_POST['upshelf'];
$brand_id=$_POST['brand_id'];
$image=$_FILES['image'];
$imageSrc=$image['tmp_name'];
if($image['error']==4){
	$sqlShop="update shop set shopname='{$shopname}',price='{$price}',stock='{$stock}',upshelf='{$upshelf},brand_id='{$brand_id}' where id={$id}";
	mysql_query($sqlShop);
	if(mysql_affected_rows()){
		echo"<script>alert('修改成功！')</script>";
		echo"<script>location='index.php'</script>";
	}else{
		echo"<script>alert('修改失败！')</script>";
		echo"<script>location='edit.php?id={$id}'";
	}
}elseif($image['error']==0){
	  $imageName=$image['name'];
	  $imageinfo=pathinfo($imageName);
	  $imageEXT=$imageinfo['extension'];
	  $imageNEW=time()."_".mt_rand().".".$imageEXT;
	  $sqlShop="update shop set shopname='{$shopname}',price='{$price}',stock='{$stock}',upshelf='{$upshelf},image='{$imageNEW}',brand_id='{$brand_id}' where id={$id}";
	  mysql_query($sqlShop);
	  if(mysql_affected_rows()){
	  	$imagePath="../public/upload/";
	  	unlink($imagePath.$image);
	  	unlink($imagePath."s-".$image);
	  	$imageDst=$imagePath.$imageNew;
	  	if(move_uploaded_file($imageSrc,$imageDst)){
	  		
	  	}


	  }
	  echo"<pre>";
	  print_r($sqlShop);
	  echo"</pre>";
	  exit;
}else{
	echo"<script>alert('请重新修改')</script>";
	echo"<script>location='edit.php?id={$id}'";
}


?>