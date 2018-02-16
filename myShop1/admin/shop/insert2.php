<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$shopname=$_POST['shopname'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$upshelf=$_POST['upshelf'];
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
         case 3;
         $imgExtension=png;
         break;
         case 5;
         $imgExtension=bmp;
         break;
   }
?>