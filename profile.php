<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content=>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>神戸 太郎のプロフィールページ</title>
<meta name="description" content="？？ ？？のプロフィールを詳しく紹介します！" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/profile.css">
<?php
    require_once("./header.php");
?>
</head>
<body class="wrap">
<div class="submission">
    <a class="a_btn" href="./profile_edit.php">編集</a>
</div>
<div class="content">
<h1 class="heading-lv1 text-center">User</h1>
<figure class="profile-image">
    <div name="user-icon" class="maru2">
    </div>
</figure>
<section class="tag">
    <ul>
        <li><a href="#"><span>C言語</span></a></li>
        <li><a href="#"><span>Java</span></a></li>
        <li><a href="#"><span>Python</span></a></li>
        <li><a href="#"><span>PHP</span></a></li>
    </ul>
<h2 class="heading-lv2 heading-margin text-center">神戸　太郎</h2>
<h2 class="heading-lv2 heading-margin text-center">ソフトⅣ コース ITエキスパート学科</h2>
<p class="text text-center">ITの知識をみなさんと共有していきたいです!</p>

<h3 class="heading-lv3 heading-margin">自己紹介</h3>
<p class="text">普段は自作のゲームPCでゲームやプログラミングをしています。得意な言語はC言語とJavaとPythonです。</p>
<h3 class="heading-lv3 heading-margin">記録</h3>
<p class="text">記事投稿数：3</p>
<p class="text">平均記事評価値：3.8</p>
<p class="text">質問投稿数：2</p>
<p class="text">質問回答数：2</p>
<p class="text">ベストアンサー数：0</p>
<p class="text">制作物投稿数：0</p>
</div>
<div class="tab-wrap">
  <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" /><label class="tab-label" for="TAB-01">質問履歴</label>
  <div class="tab-content">
    <div class="content_class">
      <div class="question">
          <a href="./question.php">
            <p class="title">Rubyのif文がループしない</p>
          </a>
          <p class="text">if文を用いて条件分岐を指定したのですが、初めに「1か2以外の数字を指定」した後に「1」あるいは「2」を入力しても、それぞれの条件分岐に進まずに処理自体が終了してしまいます。</p>
          <img class="message_icon" src="images/message_icon.png">
          <p class="message_icon_number">2</p>
          <p class="text2">2022/5/13</p>
          <p class="text2">09:59</p>
          <a class="text2" href="">神戸　太郎</a>
          <section class="tag">
              <ul>
                  <li><a href="#"><span>Ruby</span></a></li>
                  <li><a href="#"><span>初学者</span></a></li>
              </ul>
          </section>
      </div>
      <div class="question">
          <a href="./question.php">
            <p class="title">Rubyでできることが知りたい!</p>
          </a>
          <p class="text">新しくRubyを学びたいと考えているのですが、実際にRubyを使って開発をしている方に質問です。Rubyでできることとその強みを教えていただきたいです。</p>
          <img class="message_icon" src="images/message_icon.png">
          <p class="message_icon_number">11</p>
          <p class="text2">2022/5/14</p>
          <p class="text2">12:20</p>
          <a class="text2" href="">神戸　太郎</a>
          <section class="tag">
              <ul>
                  <li><a href="#"><span>Ruby</span></a></li>
                  <li><a href="#"><span>初学者</span></a></li>
              </ul>
          </section>
      </div>
  </div>
  </div>
  <input id="TAB-02" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-02">回答履歴</label>
  <div class="tab-content">
      <div class="content_class">
        <div class="question">
            <a href="./question.php">
                <p class="title">Pythonの組み込み関数について教えてください</p>
            </a>
            <p class="text2">2022/5/9</p>
            <p class="text2">11:27</p>
            <a class="text2" href="">神戸　太郎</a>
            <section class="tag">
                <ul>
                    <li><a href="#"><span>Python</span></a></li>
                    <li><a href="#"><span>プログラミング</span></a></li>
                </ul>
            </section>
                <p class="text">range関数について少々誤解しているようなので解答します。そもそもrange 関数は引数に指定した開始数から終了数までの連続した数値を要素として持つ range 型のオブジェクトを作成します。 range 関数の書式は次の通りです。
                </p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">7</p>
        </div>
        <div class="question">
            <a href="./question.php">
                <p class="title">PHPで次のようなエラーが出てしまいました。</p>
            </a>
            <p class="text2">2022/5/10</p>
            <p class="text2">17:00</p>
            <a class="text2" href="">神戸　太郎</a>
            <section class="tag">
                <ul>
                    <li><a href="#"><span>PHP</span></a></li>
                    <li><a href="#"><span>プログラム</span></a></li>
                </ul>
            </section>
            <p class="text">PHPのエラーの中で一番重たいものがFatal error となっておりますが、まさしく投稿者様が直面しているエラーです。添付されているファイルを見る限りですが、34行目の関数をよく見てください。
            </p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">20</p>
        </div>
    </div>
    </div>
  </div>
</div>
</body>
</html>
