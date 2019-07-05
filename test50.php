<?php

$img = @imagecreatefromjpeg ( "upload/bg.jpg");

$yellow = ImageColorAllocate($img, 255,255,0);

imagettftext ($img, 36, rand(30, -30), 100, 100, $yellow, "c:/xampp/htdocs/myphp/fonts/arial.ttf", "Hello, World");
header("Content-type: image/jpeg");
ImageJpeg($img);

ImageDestroy($img);
