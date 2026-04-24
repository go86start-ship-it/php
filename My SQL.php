//My SQL実行の仕方
;を打つとソース終了
<XAMPPの場合起動の仕方>
XAMPP Control panelを開き

MySQL　スタート　

コマンドプロンプトで開く

cd C:\Users\user\xampp\mysql\bin

MYSQl -uroot -p
passは打たない

<データべ-ス名>
例　use meetingroomb

<文字化け>
set names cp932;


データを入れる(ctrl+A ctrl+V)







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


cd コマンドでアドレスの後に;を入れると、コンピュータが「 ; という名前のフォルダ」を探しに行ってしまい、エラーになります。