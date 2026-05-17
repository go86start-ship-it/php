<?php
//PHPコードの開始を宣言するタグです
namespace App\Models;
//このファイルが app/Models フォルダ（ディレクトリ）に所属している事を示す
use Illuminate\Database\Eloquent\Model;
//Laravelのデータベース操作の基本機能（Model クラス）を、このファイル内に読み込む。
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//テーブル同士を紐付ける仕組み（リレーション）のうち、「〜に属する（1対多の親子関係の『子』側）」を表現するための機能（BelongsTo クラス）を読み込んでいます。
class Product extends Model
{
    // 商品は特定のカテゴリに属する
    //category という名前の関数（メソッド）を定義しています。
    public function category(): BelongsTo
    {   //category 関数の処理が、ここから始まることを示す波括弧（スタート）です。
        return $this->belongsTo(Category::class);
    }
}
