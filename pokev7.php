<?php
$order_total = array();
$order_total['1'] = 100;
$order_total['2'] = 200;
$order_total['3'] = 100;
$order_total['4'] = 500;
$order_total['5'] = 200;

$order_get = array();
$order_get['1'] = 100;
$order_get['2'] = 0;
$order_get['3'] = 100;
$order_get['4'] = 500;
$order_get['5'] = 0;


foreach($order_total as $num1 => $value){
    if(isset($order_get[$num1])){
        if($order_get[$num1] == $value){
            echo $num1. " 有收到錢 $".$value."<br>";
        }else{
            echo $num1. " 沒有收到錢 $".$value."<br>";
    }
        
    }
}

    






  





