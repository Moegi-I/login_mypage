<?php
mb_internal_encoding("utf8");

//db接続
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

//prepared statement
$sql = "insert into login_mypage(name,mail,password,picture,comments) values(?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
//bindValue
$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['picture']);
$stmt->bindValue(5,$_POST['comments']);

$stmt->execute();
$pdo = NULL;

header('Location:after_register.html');
?>