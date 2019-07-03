<?php

$fp = @fopen('https://www.certmetrics.com/vmware/default.aspx', 'r');

$i = 1;
while ($line = fgets($fp)){
      if (preg_match('/href/', $line)){
          if (preg_match('/vmware/', $line)){
          echo "{$i} => {$line}";
          $i++;
      }
    }

}
fclose($fp);


    