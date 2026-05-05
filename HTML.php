//HTML  教科書

※１ショートカットキー--------------------------------------------------------
//DOCTYPE宣言はのショートカットキー
VS Code : shift＋!でennter
//インデントをそろえる
 shift+alt+f
//DOCTYPE宣言はのショートカットキー
  アルファベット入力にして　shift+1+tab
※２formタグにいれるもの-----------------------------------------------------------
//formタグ
formタグで囲むことで、中にある送信ボタン（type="submit"）が押された瞬間に、囲まれた範囲のデータが送信されます。
<form action="/submit-form" method="POST">
  <label>キーワード：<input type="text" name="search"></label>
  <button type="submit">送信</button>
</form>

//画像を挿入
概要：img src=画像パス名、width:幅　alt:画像がない場合に出てくる名前 　a href=リンク
<img src="grapefruit-slice-332-332.jpg"
  width="160"
  alt="グレープフルーツのスライスです。おいしそう。" />
//リンクを挿入
  <a href="https://www.google.com">Googleを開く</a>



//ラベルタグ
ラジオボタンやチェックボックスなど入力項目があるもので<label>タグでかこう
<label>名前：<input type="text"></label>

//action属性:
データをどこに送るか（URL）を指定します。

//method属性: 
データの送り方を指定します。Get Post

//セレクトボックス
<label>種類：
        <select name="kind">
          <option value="1">質問</option>
          <option value="2">依頼</option>
          <option value="3">そのほか</option>
        </select>
</label>
//ラジオボタン
<label>性別</label><br>
  <label><input type="radio" name="question_a" value="choice_a">男</label><br>
  <label><input type="radio" name="question_a" value="choice_b">女</label><br>
  <label><input type="radio" name="question_a" value="choice_c">回答しない</label><br>
※３文章に入れるもの-------------------------------------------------------------------------------
  ・箇条書きは<ul>と<li>のセット

  //<nav>タグとは
    ・ページ内またはページ間の主要なナビゲーションリンクを囲むために使用されます。
    ナビゲーションリンク:Webサイト内の主要なページやセクションへユーザーを案内するリンク群
    例
    <nav class="menu">
  <ul>
    <li><a href="/">ホーム</a></li>
    <li><a href="/about">このサイトについて</a></li>
    <li><a href="/terms">利用規約</a></li>
  </ul>
</nav>

//テキストタグ
<input type="text">は1行で短い物、<textarea>は複数行の長いもの

 ※htmlのタグは小文字
 ４属性一覧-------------------------------------
 https://csshtml.work/attributes-values/
 htmlタグ	属性	値	解説
すべて	id	任意(半角英数)	CSSを指定するための名前
       class	任意(半角英数)	CSSを指定するための名前
       style	CSS	CSSを直接指定

a	     href	リンク先のURL	リンク先の指定
       target	_blank	別タブで開く

img	    src画像ファイルのURL	画像を表示させる
        alt	任意（全角）	画像の説明
        width	  半角数字	画像の幅
        height	半角数字	画像の高さ

table	  border	1	線があることを示す
td,th	  colspan	半角数字	横結合
        rowspan	半角数字	縦結合

input	type	text	一行テキストボックス
            radio	一つだけ選択できる選択肢
            checkbox	複数選択できる選択肢
            submit	送信ボタン
      name	任意(半角英数)	項目グループに名前をつける
      value	任意（全角）	入力内容を全角で送る
      placeholder	任意（全角）	テキストボックス内に文字を表示
label	for	任意(半角英数)	inputと結び付ける

４　テーブル
//テーブル 
　概要：<table>を元に、<tr>行、<th>見出し、<td>セル
  例文
  <table>
    <tr>・・行
      <th>名前</th>・・見出し
      <th>年齢</th>
    </tr>
    <tr>
      <td>田中</td>・・・セル
      <td>27</td>
    </tr>

    <thead> は HTMLの表（table）でヘッダー部分をまとめるタグ です。
    <tbody> 本体を囲む
    <tfoot>フッターを囲む
５　他の形式を使う
<?php ... ?> （標準タグ）：「ここからPHPの命令（ロジック）を書きます」という合図です。
<?= ... ?> （短縮出力タグ）：「ここにある変数の内容を、今すぐここに表示しろ」という合図です。