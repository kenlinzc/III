<?php
$a = $b = $c = $e = $f = $g = 0;
for ($i=0; i<100; i++){
$number = rand(1,6);
      switch($number){
          case 1: $number++; break;
          case 2: $number++; break;
          case 3: $number++; break;
          case 4: $number++; break;
          case 5: $number++; break;
          case 6: $number++; break;
      }
}

echo "1點出現($number)次<br>";
echo "2點出現($number)次<br>";
echo "3點出現($number)次<br>";
echo "4點出現($number)次<br>";
echo "5點出現($number)次<br>";
echo "6點出現($number)次<br>";


?>