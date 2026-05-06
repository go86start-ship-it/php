<?php
$dsn="mysql:host=localhost;dbname=relation;charset=utf8";
$user="root";
$pass="";

try{
    //インスタンス生成
    $dbh = new PDO($dsn, $user, $pass);

    $sql= "SELECT * FROM stocks";

    //準備（prepare）
    $stmt = $dbh->prepare($sql);
    //実行
    $stmt->execute(); 
    //結果の取得　//PDO:PHP Data Objects (PDO) 拡張モジュール ASSOC(連想配列)
    $Inventorys = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    print("データベースが接続できていません");
}

include 'inventory.php'; 
?>