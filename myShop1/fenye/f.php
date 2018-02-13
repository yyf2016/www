<?php
header("content-type:image/png");
$im = imagecreatetruecolor(50, 100);
$text_color = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
imagepng($im);
imagedestroy($im);
?> 