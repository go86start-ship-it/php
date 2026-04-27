//スキャナークラス
Scanner sc=new Scanner(System in);
//キーボードから整数を受け取る
int num=sc.nextInt();
//キーボードから文字列を受け取る
String userId=sc.nextLine();
//配列を変数に入れる
int[]numbers={3,7,2,9,4};
//  配列指定
int max=numbers[0];
//拡張for文
for(int num:numbers){}
//不正な引数の例外処理
throw new IllegalArgumentException

//退会処理
・データベースのユーザーデータ削除・セッション無効化（ログアウト）

// セッションオブジェクトの生成
HttpSession session=request.getSession();

//フォワード（Forward）とリダイレクト(Redirect)の違い
//フォワード
RequestDispatcher rd=request.getRequestDispatcher(nextPage);rd.forward(request,response);・ブラウザのURLは変わらない・リクエスト回数1回・実行場所はサーバー内部・リクエストスコープの値を維持できる・メリット:request.setAttribute()で保存したデータを遷移先でも使える。サーバー内の移動で高速。
//リダイレクト
RequestDispatcher rd=request.getRequestDispatcher(nextPage2);response.sendRedirect(nextPage);return;

・ディスパッチャーとは「処理のバトンタッチ（転送）を行う司令塔」・ブラウザのURLは変わる・実行場所はブラウザ（クライアント）経由・リクエスト回数は２回・リクエストスコープの値は消える・メリット:ブラウザのURLが書き換わる。ユーザーが「更新ボタン」を２回押してデータの二重送信などを防げる。

//リクエストスコープ
リクエストスコープにデータ保存 request.setAttribute("キー名",保存するオブジェクト);

//MVCモデル
M:Model 担当 Javaクラス（JavaBeansなど）処理内容　データの保存、取得、加工、管理、更新、ビジネスロジック

V:View　担当　Jsp、HTML,CSSなど　　　　処理内容　画面処理 C:Controller 担当：サーブレット 処理内容　画面遷移などWebアプリケーションのコントロール

フィールドとコンストラクタはクラスの中 JAVAのプログラムは必ずmainメソッドからスタートする クラス名（パスカルケース）は先頭大文字 パッケージ名は先頭小文字 論理削除（データそのもの削除せず、システム上で見せかける⇔物理削除（データそのものを削除）

//executeUpdate() の実行
（UPDATE/INSERT/DELETE）を行う際
//executeQuery()
SELECT
// プレースホルダに値をセット
1 は1番目のプレスホルダーに値をセット pstmt.setString(1,userId);
//.(ドットを使う場面)
メソッドの前に使う
//booleanの戻り値
メソッドの型（戻り値の型）boolean：メソッドを呼び出した側に対して、「仕事が成功したか（true）、失敗したか（false）」を報告する義務がある。

//try-catch 例外処理
// 削除処理メソッド SQLの実行と削除フラグの更新 T・K
public boolean deleteUser(String userId){
//データベースに削除のフラグを出す
String sql="UPDATE MeetingRoom SET delete_flg = TRUE WHERE userId = ?";
//データベースに接続　MRConnectionProviderはプロバイダー名
try(Connection conn=MRConnectionProvider.getConnection();PreparedStatement pstmt=conn.prepareStatement(sql)){
// プレースホルダに値をセット
pstmt.setString(1,userId);
// SQLで更新された行数を取得
int affectedRows=pstmt.executeUpdate();
// 1行以上更新されていればtrue
return affectedRows>0;
//SQLがあるので、SQLExceptionの例外処理
}catch(SQLException e){System.err.println("SQLに関するエラーが発生しました");return false;
//データベース接続しているので、ClassNotFoundExceptioの例外処理
}catch(ClassNotFoundException e){System.err.println("ドライバーが見つかりません。");return false;

}}

//セッション情報取得とrequest.getparameterは別　
セッション情報は保存、request.getparameterは送信されたものを取得するイメージ

//サーブレットの仕事
サーブレットは「入力の受付」「ビジネスロジックの呼び出し」「画面遷移」
//JSPのお仕事
画面出力
//DAOの仕事
データベース操作

//0除算チェック
0 が来たら、エラーではなく追い返す if("division",equals(selectbox)&&num=0);
//文字化け対策
postの場合　request.setchar("UTF-8");

//抽象クラス
abstract class Animal{
	フィールド
	コンストラクタ
	メソッド
}extendsを使うことにより親のフィールド、コンストラクタ、メソッドをすべて継承

class Dog extends Animal

イテレーション：ある一連の工程を何度も繰り返す事

クッキー 仕組み：サーバーがHTTPレスポンスのヘッダーにクッキーを含めると、ブラウザが保存する。　　　　次回以降、ブラウザは同じサーバーにリクエストを送る際、そのクッキーを自動的に送る。
クッキーオブジェクトの作成 Cookie usercookie=new Cookie("username",Tabaka);("名前","値")

setMaxAge(int);Cookieクラスでクッキーの有効期限を秒単位で指定するメソッド

getter:フィールドの値を取得
setter:フィールドの値を設定

//アノテーション:ードに対して「メタデータ（付加情報）」を記述するための機能です。
代表的なもの
@Override	スーパークラスのメソッドを正しくオーバーライドしているかチェックする。
@WebServlet("/Login")
//request.setCharacterEncoding("UTF-8");
doPostの時だけ必要:データは HTTPリクエストボディ に格納して送られる。サーバー側が読み取る際のデフォルトが ISO-8859-1（欧米圏用）が多い
ためrequest.setCharacterEncoding("UTF-8")

doGetはなぜ不要：データは URL（クエリパラメータ） の一部として送られる。
多くのサーブレットコンテナ（Tomcat 8.0以降など）では、URLのデコードは最初から UTF-8 で行うよう設定されている。

//キャスト(同じ型同士)
基本データ型のキャスト
基本データ型種類：int,double,boolean,３つは重要
				 long,float,double,char,short

参照型：string,

//ラッパークラス（違う型同士)








getConnection:データベース接続
prepareStatement:sql文をデータベースへ送る
プレスホルダー：正式な値が入るまでの仮置き場
Javaではリストなどの変数名は小文字から始めるのが一般的です
※セッション
session.invalidate()：現在実行中のセッションを無効化（破棄）する
request.getSession();新しいセッションを作成
例文
if (result) {
    // 1. 古いセッションを破棄
    session.invalidate();
    
    // 2. 新しいセッションを作成（trueを指定）
    session = request.getSession(true);
    
    // 3. 改めてデータをセット
    getServletContext().setAttribute(userId, session.getId());
    session.setAttribute("MR", MR);
    nextPage = "/menu.jsp";
}
フォワード vs リダイレクト: *
フォワード (forward): 削除エラーなどで「現在のリクエスト（エラーメッセージ等）を引き継いで画面を戻したい」時に使います。
// 移動先を決める
RequestDispatcher rd = request.getRequestDispatcher("/example.jsp");
// 荷物（データ）を持たせて、出発！
rd.forward(request, response);
💡 覚え方
RequestDispatcher: 「案内役」を呼ぶ。
forward: 「案内してもらう（自分は動かない）」。

リダイレクト (sendRedirect): 処理が完了し、全く別のページ（ログイン画面など）へ移動させたい時に使います。
// ブラウザに「あっち（login.jsp）へ行って！」と命令するだけ
response.sendRedirect("login.jsp");
💡 覚え方
sendRedirect: 「指差し案内」。

これ一行で、ブラウザが勝手に新しいページへ移動してくれます。

※CSVについて
セッションのクリーンアップ: CSV出力が終わった後、そのデータがもう不要であれば 
session.removeAttribute("CSVdata") を行うことで、サーバーのメモリ負荷を下げることができます。

※3大例外エラー一覧
NullPointerException：「中身が空っぽ（null）の変数に対して、何か命令をさせようとした」時に発生します。
ClassNotFoundException：プログラムが動こうとした時に、必要なクラス（ファイル）が見つからない」時に発生します。
SQLException：プログラムが動こうとした時に、必要なクラス（ファイル）が見つからない」**時に発生します。