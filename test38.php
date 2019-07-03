<?php

$fp = @fopen('./dir1/file2.txt', 'a');
fwrite($fp, "hi iam ur dady\nhi iam ur dady");


fflush($fp);
fclose($fp);



    