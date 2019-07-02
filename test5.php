<?php
    $result = $x = $y = '';
    
    if (isset($_GET['x'])){
       $x = $_GET['x']; $y = $_GET['y'];
       $r1 = (int)($x / $y);
       $r2 = $x % $y;
       $result  = "{$r1} ...... {$r2}";
       //echo "{$x} + {$y} = {$result}";
    }
?>

<form action="test5.php">
<input name="x" value="<?php echo ($x);?>">
/
<input name="y" value="<?php echo ($y);?>">
<input type="submit" value="=">
<?php
    
    echo $result;
    
?>
</form>