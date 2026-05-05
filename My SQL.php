１My SQL実行の仕方-------------------------------------
;を打つとソース終了
<XAMPPの場合起動の仕方>
XAMPP Control panelを開き
<コマンドプロンプトへログイン>
<カレントディレクトをbinへ>
cd "C:\xampp\mysql\bin"

mysql -u root -p
passは打たない
<データベースを紐づける>
<データべ-ス名>
CREATE DATABASE relation;
USE relation;
SOURCE C:/xampp/htdocs/php/practice/アズウェル/relation.sql;
SHOW TABLES;
例　use relation;

<文字化け>
set names cp932;
データを入れる(ctrl+A ctrl+V)

注意：cd コマンドでアドレスの後に;を入れると、コンピュータが「 ; という名前のフォルダ」を探しに行ってしまい、エラーになります。

USE mysqlstudy;データベース接続
２頭文字------------------------------------------------------------------------
//データベース標準言語
//データ定義言語（DDL）
    CREATE(作成)、ALTER(変更)、DROP(削除)
//データ操作言語(DML)
    SELECT（取得）、INSERT(挿入)、UPDATE(更新)、DELETE(削除)
//データ制御言語
    GRANT(権限割当)、REVOKE（権限取消）

//UPDATE文
UPDATE テーブル名　SET カラム名 = 新しい値　WHERE 条件;

//?=プレスホルダー・・・SQLインジェクションを防ぐ

//データベース作成
CREATE DATABASE データベース名
//データベース指定
USE データベース名
//データ抽出
SELECT 列名 FROM テーブル名
//論理削除
delete_flg = TRUE
//データベース削除
DROP DATABASE データベース名;
//データベース一覧
SHOW DATABASES;


//4大命令固有の部分
SELECT 列名 FROM  テーブル名
UPDATE テーブル名   SET 列名=値
DELETE FROM テーブル名
INSERT テーブル名(列名・・・)VALUES(値・・)

３　文法---------------------------------------------------------------------------------------------------
３-１SELECT系
AS+任意の名前で別名を定義できる
例文 SELECT 費目 AS ITEM,入金額 AS RECEIVE
//複数の列を検索 ,で区切る
　select name,id from books

//ON（結合条件）: 「reservation側のroomid」と「room側のid」が一致する行同士をガッチャンコしなさい、という指示です。
SELECT reservation.date, room.name FROM reservation JOIN room ON reservation.roomid = room.id;
//数をカウントする
SELECT COUNT(*) FROM Products;

３-２UPDATE系

３-３INSERT系
//productsという名前のテーブルに（列名,列名）のデータを挿入します。
INSERT INTO テーブル名(列1, 列2...) VALUES (値1, 値2...) という形式で書きます。
INSERT INTO products (product_code, name, category, price, stock)
３-４DROP系
DROP DATABASE IF EXISTS meetingroomB;もし既に meetingroomB という名前の箱（データベース）があったら、中身ごと一旦削除します。
//エラーを防ぐため、これから作るテーブルが既に存在していたら削除
DROP TABLE IF EXISTS user;
３-５CREATE系
//構文解説
CREATE TABLE テーブル名称 (
    カラム名 データ型 オプション,
    カラム名 データ型 オプション
)
CREATE USER IF NOT EXISTS 'user1'@'localhost' IDENTIFIED BY 'pass';
CREATE USER：新しいユーザーを作成
IF NOT EXISTS:「もし存在しなければ」。役割は、ユーザーが同じ名前のユーザー作成を防ぐ。
'user'@'localhost'：userはアカウント名。'@'localhost'は接続元（ホスト）の制限です。＠は「ユーザー名」と「接続元ホスト」を切り分けるための区切り文字。
IDENTIFIED BY 'pass'：パスワードはpassである。
//ほかのテーブルと紐づけ
//構文解説
CREATE TABLE reservations (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_id INT NOT NULL,           -- users.id ではなく、まずは「INT型」と定義
    room_id INT NOT NULL,           -- rooms.id ではなく、まずは「INT型」と定義
    start_at ________ NOT NULL,      -- 開始「日時」を入れる型は何でしたか？
    end_at ________ NOT NULL,        -- 終了「日時」を入れる型は何でしたか？
    
    -- ここから「紐付け（外部キー）」の設定
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (room_id) REFERENCES rooms(id)
);


３-７GRANT
データベースを操作するための「鍵（ユーザー）」を作り、その鍵で何ができるかを設定しています。
//構文解説
GRANT SELECT, UPDATE, INSERT, DELETE ON meetingroomB.* TO
作成した user に対して、meetingroomB データベース内のすべてのテーブルに対して「取得・更新・挿入・削除」の4つの権限を与えます。
on:どのデータベースに対して権限を与えるか


３-６その他
id VARCHAR(7) PRIMARY KEY,: 最大7文字のID。重複を許さない主キーです。
password VARCHAR(10) NOT NULL,: 最大10文字のパスワード。必須項目です。
name VARCHAR(10),: 最大10文字の名前。
address VARCHAR(30),: 最大30文字の住所。
is_admin：「管理者ですか？」という質問形式の名前です。役割: is_ や has_ で始まる名前は、プログラミングの世界で「はい(Yes)か、いいえ(No)か」を判定するフラグによく使われます。

NOT NULL （制約）意味: 「空っぽ（NULL）であってはならない」というルールです。
DEFAULT FALSE （初期値）：何もしていしなければfalseS
REFERENCES:リファレンスは、日本語で「参照する」という意味です。
データベースの世界では、「別のテーブルにあるデータと紐付ける（リンクさせる）」**ための重要なルール。
専門用語で**「外部キー制約」**と呼びます。
REFERENCESがあることで例えば部屋だと
・追加のとき: room テーブルに存在しない ID で予約を入れようとすると、「そんな部屋はありません！」とエラーを出して止めてくれます。
・削除のとき: まだ予約が入っている部屋を room テーブルから消そうとすると、「予約が残っているので消せません！」と守ってくれます。

//DEFAULT CURRENT_TIMESTAMP
SQL実行時の現在時刻を取得し、自動で挿入する設定
//roomテーブルに、IDが 'C01'、名前が '集中スペース'」**というデータを新しく入れたいとき、valuesは値を入れる
INSERT INTO room (id, name) VALUES ('C01', '集中スペース');
//2つのテーブルを合体させる「JOIn」
FROM reservation
JOIN room ON reservation.roomid = room.id;
ON ... = ...: どの項目を「目印」にしてくっつけるかを指定します（ここでは共通の部屋ID）。

//データの並び替え (ORDER BY)
SELECT * FROM reservation ORDER BY date DESC;
ASC: 昇順（小さい順、古い順）
DESC: 降順（大きい順、新しい順）

//LIKE演算子によるパターンマッチング
-- 名前に「田中」が含まれる人を検索
SELECT * FROM user WHERE name LIKE '%田中%';
%:任意の０文字以上の文字列
_:任意の１文字

※「並び替え（ORDER BY）」は、すべての計算や抽出が終わった「最後」に行う仕上げ作業だと覚えると間違いにくくなります！
LIMIT 5 は「5件だけ表示する」という便利な命令です。

//DATETIME
日付と時間を両方保持でき、予約管理に最も適している。

//「部屋ID」は必ず room テーブルに存在するものでなければならない、という親子関係のルール（外部キー）です。
//FOREIGN KEY (親ID) REFERENCES 親テーブル(親ID)・・・参照先は「主キー」であること
        FOREIGN KEY(roomid) REFERENCES room(id),
        FOREIGN KEY(userid) REFERENCES user(id),
        UNIQUE(roomid, date, start)

４　数値
//在庫数が10個未満の列をすべて抜き出せ
select * from Items where stock_count <10

５メソッド一覧
DISTINCT:重複除去

６例文
//データベースを操作するための「鍵」を作り、その鍵で何ができるかを設定。
CREATE USER IF NOT EXISTS 'user'@'localhost' IDENTIFIED BY 'pass';

CREATE table users(
    //カラム名をつけるとき、他のテーブルと明確に分けるためアンダーバーで区切って名前をつける
    user_id  VARCHAR(7) PRIMARY KEY,
    user_name VARCHAR(10)NOT NULL,
    user_email VARCHAR(10),
    user_password VARCHAR(255)
);

CREATE table rooms(
    room_id VARCHAR(7),
    room_name VARCHAR(7),
    room_capacity VARCHAR(10),
    room_description VARCHAR(100)
);

CREATE table reservations(
    reservation_user_id VARCHAR(7),
    reservation_room_id VARCHAR(7),
    reservation_start_time datetime DEFAULT CURRENT_TIMESTAMP,
    reservation_end_time datetime DEFAULT CURRENT_TIMESTAMP,
    //「部屋ID」は必ず room テーブルに存在するものでなければならない、という親子関係のルール（外部キー）です。
    　   FOREIGN KEY(このテーブルのカラム名) REFERENCES users(紐づけるテーブルのカラム名),
        FOREIGN KEY(reservation_user_id) REFERENCES users(user_id),
        FOREIGN KEY(reservation_room_id) REFERENCES rooms(room_id),
        UNIQUE(room_id, date, start),

        UNIQUE(room_id,start_time)
);



