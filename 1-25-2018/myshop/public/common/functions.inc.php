<?php
function thumb($filename,$mixW,$mixH){ 
	$imageSize=getimagesize($filename);
	$maxW=$imageSize[0];
	$maxH=$imageSize[1];
	$maxType=$imageSize[2];
	$imgDir=dirname($filename);
	$imgName=basename($filename);
	if($mixW/$maxW>=$mixH/$maxH){
		$ratio=$mixW/$maxW;
	}else{
		$ratio=$mixW/$maxW;
	}
	$mixW =floor($mixW * $ratio);
	$mixH =floor($mixH * $ratio);
	$imMix=imagecreatetruecolor($mixW,$mixH);
	$imMax=imagecreatefromjpeg($filename);
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
	$minName="s-".$imgName;
	$minPath=$imgDir.'/'.$minName;
	$imageOut($imMix,$minPath);
	imagedestroy($imMix);
	imagedestroy($imMax);
}
 ?>