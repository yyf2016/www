<?php 
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$shopname=$_POST['shopname'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$upshelf=$_POST['upshelf'];
$brand_id=$_POST['brand_id'];
$imageSrc=$_FILES['image']['tmp_name'];
$imageName=$_FILES['image']['name'];
$imagePath=pathinfo($imageName);
$imageExt=$imagePath['extension'];
$image=time()."_".mt_rand().".".$imageExt;
$imageDst="../../public/upload/".$image;
if(move_uploaded_file($imageSrc,$imageDst)){
   $imageInfo=getimagesize($imageDst);
   switch($imageInfo[2]){
   		case 1:
   		$imgExtension=gif;
   		break;
   		case 2:
   		$imgExtension=jpeg;
   		break;
   		case 3:
   		$imgExtension=png;
   		break;
   		case 5:
   		$imgExtension=bmp;
   		break;
    }
   
   $maxC="imagecreatefrom".$imgExtension;
   $max=$maxC($imageDst);
   $maxW=$imageInfo[0];
   $maxH=$imageInfo[1];
   if(200/$maxW>200/$maxH){
   	   $scale=200/$maxH;
   }else{
   	   $scale=200/$maxW;
   }
   $minW=floor(200*$scale);
   $minH=floor(200*$scale);
   $min=imagecreatetruecolor($minW,$minH);
   imagecopyresampled($min,$max,0,0,0,0,$minW,$minH,$maxW,$maxH);
   $imageOut="image".$imgExtension;
   // header("content-type:image/{$imgExtension}");
   $imageS="s_".$image;
   $imageSDst="../../public/upload/".$imageS;
   $imageOut($min,$imageSDst);
   $sqlshop="insert into shop(shopname,price,stock,upshelf,image,brand_id) values('{$shopname}',{$price},{$stock},'{$upshelf}','{$image}','{$brand_id}')";
   
  $rstshop=mysql_query($sqlshop);
  if(mysql_affected_rows()){
  	echo "<script> alert('添加数据成功！')</script>";
  	echo "<script> location='index.php'</script>";
  }else{
  	echo "<script>alert('添加数据失败！')</script>";
  	echo "<script>location='index.php'</script>";
 }
}
?>