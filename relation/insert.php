<?php
//データベース接続
$dbh = "mysql:host=localhost;dbname=customertable;charset=utf8";
$user = "user";
$pass = "pass";
//POSTでプランのデータを受け取る
$user_plan=$_POST["user_plan"];
//セッション接続
try {
    //PDOインスタンス生成
    $PDO = new PDO($dsh, $user, $pass);
    // プレースホルダ（?）を使ったSQL
    $sql = "INSERT INTO customers (customer_id,customer_name,customer_email,customer_phone,customer_address)

    $stmt = $dph->prepare($sql);
} catch (PDOException) {
    print("データベース接続でエラーがでました");
}

?>





?>