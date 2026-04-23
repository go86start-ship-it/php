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
<img src="grapefruit-slice-332-332.jpg"
  width="160"
  alt="グレープフルーツのスライスです。おいしそう。" />
//リンクを挿入
  <a href="https://www.google.com">Googleを開く</a>

//テーブル
      <table border="1">1は枠線の太さ
    <tr>・・行
      <th>名前</th>・・見出し
      <th>年齢</th>
    </tr>
    <tr>
      <td>田中</td>・・・セル
      <td>27</td>
    </tr>

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