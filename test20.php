<?php
$a = [];
//var_dump($a);
$a[] = 1;
$a[] = 'brad';
$a[] = true;
$a[] = 12.3;
var_dump($a);
echo count($a) . '<br>';
$a[10] = 12; $a[1] = 'ken';
var_dump($a);
$a[] = 123;
var_dump($a);
echo '<hr>';
$b = array(4 => 1,2,17 => 3,4,5);
var_dump($b);

?>