<?php 
$filename="1.jpg";
$filepath="images/1.jpg";
$imageSize=getimagesize($filepath);
$maxW=$imageSize[0];
$maxH=$imageSize[1];
$maxType=$imageSize[2];
$mixW=200;
$mixH=500;
if($mixW/$maxW>=$mixH/$maxH){
	$ratio=$mixW/$maxW;
}else{
	$ratio=$mixW/$maxW;
}
$mixW =floor($mixW * $ratio);
$mixH =floor($mixH * $ratio);
$imMix=imagecreatetruecolor($mixW,$mixH);
$imMax=imagecreatefromjpeg($filepath);
imagecopyresampled($imMix,$imMax,0,0,0,0,$mixW,$mixH,$maxW,$maxH);
header("contect-type:image/jpeg");
switch($maxType){
	case 1:
	$imageOut="imagegif";
	break;
	case 2:
	$imageOut="imagejpeg";
	break;
	case 3:
	$imageOut="imagepng";
	break;

}
$minFileName="s".$filename;
$minFilePath="images/".$minFileName;
$imageOut($imMix,$minFilePath);
imagedestroy($imMix);
imagedestroy($imMax);
 ?>