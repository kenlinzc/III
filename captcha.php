<?php
 if(!isset($_SESSION)){ session_start(); } 
 $_SESSION['check_word'] = ''; 
 
 header("Content-type: image/PNG");
$nums=5; 
$width=$nums*10;  
$high=20;  

$str = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMOPQRSTUBWXYZ";
$code = '';
for ($i = 0; $i < $nums; $i++) {
$code .= $str[mt_rand(0, strlen($str)-1)];
}

$_SESSION['check_word'] = $code;

$image = imagecreate($width, $high);

$black = imagecolorallocate($image, 0, 0, 0);  //黑色底色
$white = imagecolorallocate($image, 255, 255, 255);  //白色文字

imagerectangle($image, 0, 0, $width-1, $high-1, $black);   

imagestring($image, 5, 3, 3, $code, $white);
imagepng($image);
imagedestroy($image);  
?>