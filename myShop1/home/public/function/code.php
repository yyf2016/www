<?php
session_start();
$array1=range("a","z");
$array2=range("A","Z");
$array3=range(0,1);
$arrayT=array_merge($array1,$array2,$array3);
shuffle($arrayT);
$array=array_slice($arrayT,0,4);
foreach($array as $str){
  $string=$string.$str;
}
$_SESSION['code1']=$string;
$image=imagecreatetruecolor(109,40);
$white=imagecolorallocate($image,255,255,255);
for($i=0;$i<20;$i++){
	imageline($image,mt_rand(0,109),mt_rand(0,40),mt_rand(0,109),mt_rand(0,40),$white);
}
for($i=0;$i<100;$i++){
	imagesetpixel($image,mt_rand(0,109),mt_rand(0,40),$white);
}
$font="msyh.ttc";
imagettftext($image,25,0,10,30,$white,$font,$string);
header("content-type:image/jpeg");
imagejpeg($image);
?>