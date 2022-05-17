<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/question_answer.css">
    <?php
      require_once("./header.php");
    ?>
    <title>質問回答画面</title>
</head>
<body>
  <!-- タイトル -->
  <div class="question_header">
    <div class="question_title">
      <h1 class="title">Rubyのif文がループしない</h1>
    </div>

    <!-- 投稿日 -->
    <div class="question_date">
      <h4 class="underbar">投稿日：2022/05/13 09:59</h4>
    </div>

    <!-- 質問投稿者 -->
    <div class="user_data">
      <!-- 投稿者のアイコン -->
      <div class="question_user_icon round">
      </div>

      <div class="question_user_icon_photo">
        <img src="./images/user_icon_1.png" width="18" height="18">
      </div>

      <h4 class="underbar">投稿者：　　ソフトⅣ 神戸 太郎</h4>
    </div>
  </div>


  <!-- 質問の内容 -->
  <div class="question_box" >
    <!-- 質問の添付写真 -->
    <div class="question_photo">
      <img src="./images/question_image_1.png" height="432">
    </div>
    <div class="question_data">
    <p>if文を用いて条件分岐を指定したのですが、初めに「1か2以外の数字を指定」した後に「1」あるいは「2」を入力しても、それぞれの条件分岐に進まずに処理自体が終了してしまいます。
      「1」または「2」以外の数字を入力した後、どちらかの数字を正しく入力できたとき、それぞれの条件分岐の機能に入るようにするにはどうしたらいいでしょうか。</p>
    </div>

    <!-- ハッシュタグ -->
    <div class="question_tag">
      <p class="priority_text">困っている度：<span class="priority_rank_text_yellow">中</span></p>
      <section class="tag">
          <ul>
            <li><a href="#"><span>Ruby</span></a></li>
            <li><a href="#"><span>csv</span></a></li>
            <li><a href="#"><span>if文</span></a></li>
          </ul>
      </section>
    </div>
  </div>


  <div class="answer_box">
    <p class="answer_title">回答</p>
    <textarea class="answer_text"></textarea>
  </div>

  <!-- "回答" ボタン -->
  <div class="answer_button">
    <!-- 回答後の画面が必要 -->
    <a href="./question.php" class="a_btn right_button">回答</a>
  </div>

</body>
</html>
