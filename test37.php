<?php

$fp = @fopen('./dir1/file1.txt', 'r');
while ($file = fgetc($fp)){
      echo nl2br($file);

}
fclose($fp);


    