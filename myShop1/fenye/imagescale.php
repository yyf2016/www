<?php
$image="image/images.jpg";
$imageRst=imagecreatefromjpeg($image);
header("content-type:image/png");
imagepng($imageRst);
?>