<?php
include_once 'test56.php';
session_start();
$var1 = $_SESSION['var1'];
echo "Sum: {$var1->sum()}; Avg: {$var1->avg()}<br>";
//if (!isset($_SESSION['var1'])) header('location: test54.php');


//echo $var1[2];

?>

