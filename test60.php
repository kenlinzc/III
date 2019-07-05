<?php
if (!isset($_GET['account'])) die();

include_once 'sql.php';

$account = $_GET['account'];
$sql = "select *from member where account = '{$account}'";
$result = $mysqli->query($sql);
echo $result->num_rows;


 

xhttp.onreadystatwchage = function(){
    if (xhttp.reposeText == 0){
        document.getElementById('mesg').innerHTML = 'OK';

    }else{
        document.getElementById('mesg').innerHTML = 'XX';
    }
}
