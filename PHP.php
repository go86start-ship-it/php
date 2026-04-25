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
※１データベース接続
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

//prepare
ログイン機能のように「ユーザーが入力したIDやパスワード」をSQLに組み込む場合は、必ず prepare を使う必要があります。SQLインジェクション対策。

// 1. 命令の形だけ先に送る（値が入る場所は「?」にしておく）
$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $pdo->prepare($sql);

// 2. 「?」に入る具体的なデータを後から入れる
$user_id = 'U001'; // 本来はフォームから飛んできた値
$stmt->execute([$user_id]);

// 3. 結果を取り出す
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);