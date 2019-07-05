<?php
$mysqli = new mysqli('localhost','root','','cy');
//echo $mysqli->connect_errno;
$mysqli->set_charset('utf8');

//$sql = 'INSERT INTO cust (cname,tel,birthday) VALUE ("brad","123","1999-01-02")';
//$sql .= ' , ("cy1","234","1999-01-02")';
//$sql .= ' , ("cy2","456","1999-01-02")';
//$sql = 'update cust set cname = "Tony" where id = 12';
//$sql = 'delete from cust where id =12';
$cname = 'Kevin';
$tel = '0900-000000';
$birthday = '1999-09-09';
$sql = 'INSERT INTO cust (cname,tel,birthday) VALUE(?,?,?)';
$stmt = $mysqli->prepare($sql); //$stmt is a Object of mysqli_stmt
$stmt->bind_param('sss', $cname, $tel, $birthday);
$stmt->execute();
echo $stmt->affected_rows;
echo $mysqli->error;
// update cust set cname = "Tony" where id = 3