<?php
include_once 'test56.php';
session_start();
//$var1 = rand(1,100);
$var1 = new Student(90, 87, 50);
$sum = $var1->sum(); $avg = $var1->avg();
echo "Sum: {$var1->sum()}; Avg: {$var1->avg()}<br>";
$_SESSION['var1'] = $var1;

//$var1 = 200;

?>
<a href='test55.php'>Next Page</a>
