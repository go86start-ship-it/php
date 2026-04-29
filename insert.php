<?php
//データベース接続
$dbh="mysql:host=localhost;dbname=customertable;charset=utf8";
$user="user";
$pass="pass"

//セッション接続
try{
//PDOインスタンス生成
$PDO=new PDO($DBA,$user,$pass);
// プレースホルダ（?）を使ったSQL
$sql = "SELECT * FROM rooms WHERE id = ?";

$stmt=$dph->prepare($sql);
}catch(PDOException){
    print("データベース接続でエラーがでました")
}







?>
