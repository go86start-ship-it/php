//css教科書
1. 基本的な書き方
例
h1 {
  color: blue;        /* 文字の色を青にする */
  font-size: 24px;    /* 文字の大きさを24ピクセルにする */
  text-align: center; /* 文字を中央寄せにする */
}
2. CSSでできること
・レイアウトの調整: 要素を横に並べたり（Flexbox, Grid）、余白を作ったりします。
・レスポンシブデザイン: スマホ、タブレット、PCなど、画面サイズに合わせてデザインを自動で切り替えます。
・アニメーション: ボタンにマウスを乗せた時に色を変えたり、ふわっと要素を表示させたりします。
・装飾: 背景画像の設定、角を丸くする（角丸）、影をつける（ドロップシャドウ）などが可能です。

３ボックスモデルという考え方
CSSを理解する上で最も重要なのが「ボックスモデル」です。すべての要素は四角い箱（ボックス）として扱われます。
・Content: テキストや画像そのもの。
・Padding: 中身と枠線の間の内側の余白。
・Border: 要素を囲む枠線。
・Margin: 隣の要素との間の外側の余白。
４Flexbox
    Flexboxを使うには、**親要素（Flex Container）と子要素（Flex Item）**という関係を作ります。

※５　CSSファイルをhtmlに適用する方法
.css ファイルをHTMLに適用させるには、HTMLの <head> タグ内に以下の一行を記述します。
HTML
<link rel="stylesheet" href="style.css">
HTMLファイルから見たCSSファイルの場所（パス）を指定します。同じフォルダにあるなら style.css だけでOKです。

6 メソッド一覧
background-color:背景色
font-family：字体
margin: 0 auto:中央寄せ
padding:余白
border-bottom:下線