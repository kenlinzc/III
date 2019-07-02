<script>



<?php
    $result = $x = $y = '';
    
    if (isset($_GET['x'])){
       $x = $_GET['x']; $y = $_GET['y'];
       $result  = $x + $y;
       //echo "{$x} + {$y} = {$result}";
    }
?>

<form action="test5.php">
<input name="x" value="<?php echo $x;?>">
+
<input name="y" value="<?php echo $y;?>">
<input type="submit" value="=">
<?php
    
    echo $result;
    
?>
</form>