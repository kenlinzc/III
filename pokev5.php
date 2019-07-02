<?php
$poker = range(0,51);
shuffle($poker);

$players = [[],[],[],[]];
foreach($poker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}
?>
<table border="1" width="100%">

        <?php
        $suits = array("&spades;","&hearts;","&diams;","&clubs;");
        $values = array('A',2,3,4,5,6,7,8,9,10,'j','Q','K');
          foreach($players as $players){
            echo '<tr>';
            foreach($players as $card){
            echo "<td>";
            echo "{$suits[(int)($card/13)]}{$values[$card%13]}";

            echo "</td>";
        }  
        echo '</tr>';
    }
        ?>
    
</table>











