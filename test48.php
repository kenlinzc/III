<?php
// 1. canvas (new)
// 2. process
// 3. output => 1. display or 2. export to file


$rate = $_GET['rate']; // 50%



$img = ImageCreateTrueColor(400, 20);
$black = imagecolorallocate($img, 255, 255, 255);
imagefilledrectangle ($img, 0, 0, 400, 20, $black);
$white = imagecolorallocate($img, 0, 0, 0);
imagefilledrectangle ($img, 0, 0, $rate*400/100, 20, $white);




header("Content-type: image/jpeg");
imagejpeg($img);

imageDestroy($img);