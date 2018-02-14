<?php
  $imageA="image/images.jpg";
  $imageB="image/download.jpg";
  $imagedst=imagecreatefromjpeg($imageA);
  $imagesrc=imagecreatefromjpeg($imageB);
  $arrayA=getimagesize($imageA);
  $arrayB=getimagesize($imageB);
  $width=$arrayA[0]-$arrayB[0];
  $height=$arrayA[1]-$arrayB[1];
  $bool=imagecopy($imagedst,$imagesrc,$width,$height,0,0,$arrayB[0],$arrayB[1]);
  
  header("content-type:image/jpeg");
  imagejpeg($imagedst);
?>