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
$imageOLD=$_POST['image'];
$image=$_FILES['image'];
$imageSrc=$image['tmp_name'];
if($image['error']==4){
	$sqlShop="update shop set shopname='{$shopname}',price='{$price}',stock='{$stock}',upshelf='{$upshelf}',brand_id='{$brand_id}' where id={$id}";
	mysql_query($sqlShop);
	if(mysql_affected_rows()){
		echo"<script>alert('无图片修改成功！')</script>";
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
	  $sqlShop="update shop set shopname='{$shopname}',price='{$price}',stock='{$stock}',upshelf='{$upshelf}',image='{$imageNEW}',brand_id='{$brand_id}' where id={$id}";
	  mysql_query($sqlShop);
	  if(mysql_affected_rows()){
	  	$imagePath="../../public/upload/";
	  	$imageTT=$imagePath.$imageOLD;
	  	$imageSTT=$imagePath."s_".$imageOLD;
	  	unlink($imageTT);
	  	unlink($imageSTT);
	  	$imageDst=$imagePath.$imageNEW;
	  	// echo"<pre>";
	  	// print_r($imageDst);
	  	// echo"</pre>";
	  	// exit;
	  	if(move_uploaded_file($imageSrc,$imageDst)){
	  		$imageinfoN=getimagesize($imageDst);
	  		$imagewidth=$imageinfoN[0];
	  		$imageheight=$imageinfoN[1];
	  		switch($imageinfoN[2]){
	  			case 1:
	  			$imageExtN=gif;
	  			break;
	  			case 2:
	  			$imageExtN=jpeg;
	  			break;
	  			case 3:
	  			$imageExtN=png;
	  			break;
	  			case 6:
	  			$imageExtN=bmp;
	  			break;
	  		}
	  		$imageC="imagecreatefrom".$imageExtN;
	  		$imageB=$imageC($imageDst);
            if(200/$imagewidth>200/$imageheight){
            	$scale=200/$imagewidth;
            }else{
            	$scale=200/$imageheight;
            }
            $minW=floor(200*$scale);
            $minH=floor(200*$scale);
            $imageMin=imagecreatetruecolor($minW,$minH);
            imagecopyresampled($imageMin,$imageC,0,0,0,0,$imagewidth,$imageheight,$minW,$minH);
            $minName="s_".$imageNEW;
            $minPath="../../public/upload/".$minName;
            $minOut="image".$imageExtN;
            $minOut($imageMin,$minPath);
            echo"<script>alert('图片修改成功')</script>";
            echo"<script>location='index.php'</script>";

	  	}


	  }
	 
}else{
	echo"<script>alert('请重新修改')</script>";
	echo"<script>location='edit.php?id={$id}'";
}


?>