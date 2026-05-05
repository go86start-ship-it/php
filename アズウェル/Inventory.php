<?php
$dsn="mysql:host=localhost;dbname=relation;charset=UTF-8";
$user="root";
$pass="";

try{
    //インスタンス生成
    $dbh = new PDO($dsn, $user, $pass);

    $sql= "SELECT * FROM stocks where stock_id=?";

    //準備（prepare）
    $stmt = $dbh->prepare($sql);

    //実行（execute）
    $target_id ="Z1";
    //$stmt を使って、? のところに $target_id を入れて実行してね！」という命令です。
    $stmt->execute([$target_id]); 
    //結果の取得　//PDO:PHP Data Objects (PDO) 拡張モジュール ASSOC(連想配列)
    $Inventorys = $stmt->fetch(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    print("データベースが接続できていません");
}



include 'inventory.html'; 
?>