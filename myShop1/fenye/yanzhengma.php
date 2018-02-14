<?php
session_start(); 
$arry1=range(0,9);
$arry2=range('a','z');
$arry3=range('A','Z');
$arry=array_merge($arry1,$arry2,$arry3);
shuffle($arry);
$arryFour=join("",(array_slice($arry,0,4)));
$_SESSION["vcode"]=strtolower($arryFour);
// echo "<pre>";
// print_r($arryFour);
// echo "</pre>";
$rst=imagecreatetruecolor(400,200);
$black=imagecolorallocate($rst,250,250,250);
for($i=1;$i<1000;$i++){
	imagesetpixel($rst,mt_rand(0,400),mt_rand(0,200),$black);
}
for($i=1;$i<30;$i++){
	imageline($rst,mt_rand(0,400),mt_rand(0,200),mt_rand(0,400),mt_rand(0,200),$black);
}
$font="fonts/simkai.ttf";
imagettftext($rst,80,0,100,120,$black,$font,$arryFour);
header("content-type:image/png");
imagepng($rst);



?> 