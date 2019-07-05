<meta charset="utf-8">
<?php
if(!isset($_SESSION)){ session_start();}  
if($_SESSION['check_word'] == $_POST['checkword']){         
$_SESSION['check_word'] = '';               
echo '輸入正確，將於一秒後跳轉';
echo '<meta http-equiv="refresh" content="1;URL=index.php">';
exit();
 }else{
echo 'Error輸入錯誤，將於一秒後跳轉';
echo '<meta http-equiv="refresh" content="1;URL=index.php">';
 }
?>