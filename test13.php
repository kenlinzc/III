<?php

$a = 10; $b = 8;
switch ($a){
   case 1:
       echo 'A';
       break;
   case '10':
       echo 'B1';
       break;
   case 10:
       echo 'B2';
       break;
   case 100:
       echo 'C';
       break;
   default:
       echo 'X';
}
echo '<hr>';


