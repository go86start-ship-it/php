<?php
$dsn = "mysql:host=localhost;dbname=relation;charset=utf8";
$user = "root";
$pass = "";

// 1. HTMLのフォームから送られてきた値を取得
$target_id = $_POST['user_id'] ?? '';
$input_pass = $_POST['password'] ?? '';

try {
    $dbh = new PDO($dsn, $user, $pass);

    // 2. IDで検索
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$target_id]); 

    // 結果を取得
    $login = $stmt->fetch(PDO::FETCH_ASSOC);

    // 3. 判定
    if ($login) {
        // ユーザーが存在する場合、パスワードを照合
        if ($input_pass === $login['user_password']) {
            // パスワード一致：在庫ページへ移動
            include 'inventory.php'; 
            exit;
        } else {
            echo "パスワードが正しくありません。";
        }
    } else {
        // ユーザーが見つからなかった場合
        echo "デバッグ：送信されたIDは「" . $target_id . "」です。<br>";
    }

} catch (PDOException $e) {
    print("データベースに接続できていません: " . $e->getMessage());
}
?>