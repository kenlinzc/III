<?php

?>
<table border='1' width='100%'>
    <?php
    define("ROWS", 2);
    define("FROM", 2);
    define("TO", 5);
    for ($k = 0; $k<ROWS; $k++){ // 列
        echo '<tr>';
        for ($j = FROM; $j<=TO; $j++){ // 行與數字
           echo '<td bgcolor="pink">';
           $newj = $j + (TO-FROM+1) * $k;
           for ($i = 1; $i<=9; $i++){ // 1-8
           $r = $newj * $i;
           echo "{$newj} x {$i} = {$r}<br>";
        }
        echo '</td>';
    }
    echo '</tr>';
}
 ?>
    
</table>
