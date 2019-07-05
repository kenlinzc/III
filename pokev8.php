<?php

$pokemon = "皮卡丘";
echo $pokemon. " 使用 十萬伏特<br>";



$atk = 100;
$damage = $atk + 10 * 2;
echo "$damage<br>";



$weather = rand(1,100);
$x = "sunny";
$y = "rainning";
if($weather <= 50){
    echo  "降雨機率: $weather  %<br> Today is " .$x. " day";
}else{
    echo  "降雨機率: $weather  %<br> Today is "  .$y. " day";
}












