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
      <h1 class="underbar">ここには質問のタイトルが入ります。</h1>
    </div>

    <!-- 投稿日 -->
    <div class="question_date">
      <h4 class="underbar">投稿日：2018/12/25 23:48</h4>
    </div>

    <!-- 質問投稿者 -->
    <div class="user_data">
      <!-- 投稿者のアイコン -->
      <div class="question_user_icon round">
      </div>

      <div class="question_user_icon_photo">
        <img src="./images/user_icon_1.png" width="18" height="18">
      </div>

      <h4 class="underbar">投稿者：　　冨安健洋</h4>
    </div>
  </div>


  <!-- 質問の内容 -->
  <div class="question_box" >
    <!-- 質問の添付写真 -->
    <div class="question_photo">
      <img src="./images/image_3.jpg" width="768" height="432">
    </div>
    <div class="question_data">
      <p>ここには質問内容が入ります。ここには質問内容が入ります。ここには質問内容が入ります。
          ここには質問内容が入ります。ここには質問内容が入ります。ここには質問内容が入ります。
          ここには質問内容が入ります。ここには質問内容が入ります。ここには質問内容が入ります。
          ここには質問内容が入ります。ここには質問内容が入ります。ここには質問内容が入ります。
          ここには質問内容が入ります。ここには質問内容が入ります。ここには質問内容が入ります。</p>
    </div>

    <!-- ハッシュタグ -->
    <div class="question_tag">
      <section class="tag">
          <ul>
              <li><a href="#"><span>タグ</span></a></li>
              <li><a href="#"><span>タグ</span></a></li>
              <li><a href="#"><span>タグ</span></a></li>
              <li><a href="#"><span>タグ</span></a></li>
              <li><a href="#"><span>タグ</span></a></li>
              <li><a href="#"><span>タグ</span></a></li>
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
    <input type="submit" name="submit" value="回答" class="btn right_button" >
  </div>

</body>
</html>