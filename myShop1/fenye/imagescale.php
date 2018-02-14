<?php
$image="image/images.jpg";
$imageRsc=imagecreatefromjpeg($image);
$imagearr=getimagesize($image);
$imageWidth=$imagearr[0];
$imageHeight=$imagearr[1];
$imageMIME=$imagearr["mime"];
switch($imagearr[2]){
     case 1:
         $imageOut=imagegif;
         break;
     case 2:
         $imageOut=imagejpeg;
         break;
     case 3:
         $imageOut=imagepng;
         break;
     case 6:
         $imageOut=imagebmp;
         break;
}
$imageW=500;
$imageH=200;
if($imageW/$imageWidth>$imageH/$imageHeight){
	$scale=$imageW/$imageWidth;
}else{
	$scale=$imageH/$imageHeight;
}

$imagedstW=floor($imageW*$scale);
$imagedstH=floor($imageH*$scale);
$imageDst=imagecreatetruecolor($imagedstW,$imagedstH);
imagecopyresampled($imageDst,$imageRsc,0,0,0,0,$imagedstW,$imagedstH,$imageWidth,$imageHeight);

header("content-type:{$imageOut}");
$imageOut($imageDst);
?>