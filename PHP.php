１データベース接続
PHPでSQLを動かす3つのステップ
1接続（コネクション）: データベースの扉を開ける。

2実行（クエリ）: SQL文を送り、結果を受け取る。

3表示（フェッチ）: 受け取ったデータを画面に出す。
<?php
// 1. 接続設定（データベースの住所や合言葉）
//mysql:データベースの「住所（ホスト）」、abname:箱の名前（データベース名）」、文字化けを防ぐための「文字コード（utf8）」
$dsn      = 'mysql:host=localhost;dbname=meetingroomB;charset=utf8';
//SQLの最初で作った「鍵」の情報です。
$user     = 'user';
//扉を開けるためのユーザー名と暗証番号です。
$password = 'pass';


//結果を取り出す
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

例文
<?php
$dsn  = "mysql:host=localhost;dbname=mysqlstudy;charset=utf8";
$user = "root"; // XAMPPのデフォルトは root
$pass = "";     // XAMPPのデフォルトは 空白

try {
    //インスタンス生成
    $dbh = new PDO($dsn, $user, $pass);

    // 1. プレースホルダ（?）を使ったSQL
    $sql = "SELECT * FROM rooms WHERE id = ?";

    // 2. 準備（prepare）
    $stmt = $dbh->prepare($sql);

    // 3. 実行（execute） 検索するIDは１番という意味。？のほうがプロ向き
    $target_id = 1;
    //$stmt を使って、? のところに $target_id を入れて実行してね！」という命令です。
    execute の引数は「配列」にする
    今回select文で? を使った場合は、値を []（角括弧）で囲むルールです。

    $stmt->execute([$target_id]); 

    // 4. 結果の取得　//PDO:PHP Data Objects (PDO) 拡張モジュール ASSOC(連想配列)
    $room = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($room) {
        echo "部屋名: " . $room['roon_name']; 
    }

} catch (PDOException $e) {
    //$eからエラー内容を取り出す
    echo "エラー: " . $e->getMessage();
}
?>



※２セキュリティ---------------------------------------------------------------
//htmlspecialchars()
PHPでデータを出力する際は、 関数を使うのが鉄則です。これにより、悪意のあるスクリプトが実行される「XSS（クロスサイトスクリプティング）」を防ぎます。

//prepare
ログイン機能のように「ユーザーが入力したIDやパスワード」をSQLに組み込む場合は、必ず prepare を使う必要があります。SQLインジェクション対策。
ユーザー入力と値を分離して入力するため、不正な実行を防げる。




３配列-------------------------------------------------------------------------------------------------
//連想配列から色を取得
$fruits = [
    "Apple"  => "Red",
    "Banana" => "Yellow",
    "Grape"  => "Purple"
];
//
foreach ($fruits as $fruit => $color) {
    echo "The color of {$fruit} is {$color}.<br>";
}

アロー演算子 ->:オブジェクトのメンバにアクセスする
役割：中身を取り出す
・プロパティ（変数）の値を取得・変更する
・メソッド（関数）を呼び出す
基本構文
$オブジェクト変数->プロパティ名；
$オブジェクト変数->メソッド名();

ダブルアロー　=>:連想配列で「キー」と「値」を結びつける
４セッション-------------------------------------------------------------------
//セッション機能を有効にする　セッションを行う場合必須
session_start();
//セッション変数を空にする。
$_SESSION = array();
//セッションの破棄
session_destroy();

<?php 
  session_start();
//POSTはすべて大文字
  $id=$_POST["id"]; 
 $pass=$_POST["pass"]; 
    if($id==="admin"&& $pass==="1234"){
        //$_SESSIOはすべて大文字 
        //ログイン情報を保持
        SESSION["login"]=true;

    }

    abstruct class Animal{
    protected $name;
    //コンストラクタ    初期状態なので何か情報を与えなければならない（）引数いる
    
    public function␣__construct($name){
        $this->name=$name;
    }
    //フィールドに値があるため()の中は引数なしでいい
    //newで別のインスタンスを生成した場合は、その値を入れるため引数必要
    public function eat(){
        echo"{$this->name}は食事をしました"
    }
}
５ファイルを読み込む　受け取る-------------------------------------------------------------------------------------
//PHPファイルを読み込む
require：致命的なエラー（Fatal）となり処理を停止
include：警告（Warning）となり処理は継続



//現在の日時を文字列で取得
date("Y-m-d H:i:s")

//step属性
“input”要素で表される入力欄に入力可能な数値の間隔を指定する属性です。
使える物：date,month,week,time,datetime-local,number,range


//日時に関する型３種類
・DATE
    形式：YYYY-MM-DD　西暦・月・日
・DATETIME
　　形式：YYYY-MM-DD HH:MM:SS　　西暦・月・日・何時何分何秒
TIMESTAMP
    形式：YYYY-MM-DD HH:MM:SS　　西暦・月・日・何時何分何秒
    特徴：自動で時間を書き込む
//include
include 'inventory_view.php'; 
「今ここで使っている変数（$items など）を持ったまま、inventory_view.php の中身をここにコピーして合体させて実行して！」
表示用のHTML(相手方のファイル)を読み込みます
include 'inventory_view.php';
６ HTMLとデータをやり取りする
//データを受け取る
$_POST['name属性の名前']
$_GET['name属性の名前']