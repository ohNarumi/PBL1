<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content=>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>？？ ？？のプロフィールページ</title>
<meta name="description" content="？？ ？？のプロフィールを詳しく紹介します！" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/profile.css">
<?php
    require_once("./header.php");
?>
</head>
<body class="wrap">
<div class="submission">
    <!-- プロフィール編集画面がないためリンク先を設定しない -->
    <input type="submit" name="submit" value="編集" class="btn submit" >
</div>
<div class="content">
<h1 class="heading-lv1 text-center">User</h1>
<figure class="profile-image">
    <div name="user-icon" class="maru2">
    </div>
</figure>
<section class="tag">
    <ul>
        <li><a href="#"><span>タグ</span></a></li>
        <li><a href="#"><span>タグ</span></a></li>
        <li><a href="#"><span>タグ</span></a></li>
        <li><a href="#"><span>タグ</span></a></li>
    </ul>
<h2 class="heading-lv2 heading-margin text-center">？？ ？？</h2>
<h2 class="heading-lv2 heading-margin text-center">？？ コース ？？学科</h2>
<p class="text text-center">ここに軽いひとことコメント等の内容が入ります。</p>

<h3 class="heading-lv3 heading-margin text-center">自己紹介</h3>
<p class="text text-center">ここに内容が入ります。ここに内容が入ります。ここに内容が入ります。ここに内容が入ります。ここに内容が入ります。ここに内容が入ります。ここに内容が入ります。ここに内容が入ります。</p>
</div>
<div class="tab-wrap">
  <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" /><label class="tab-label" for="TAB-01">質問履歴</label>
  <div class="tab-content">
    <div class="content_class">
      <div class="question">
          <p class="title">質問タイトル</p>
          <p class="text">質問本文(1行で収まるように表示できる文字数を制限する)</p>
          <img class="message_icon" src="images/message_icon.png">
          <p class="message_icon_number">回答数</p>
          <p class="text2">日付</p>
          <p class="text2">時間</p>
          <a class="text2" href="">投稿者名</a>
          <section class="tag">
              <ul>
                  <li><a href="#"><span>タグ</span></a></li>
                  <li><a href="#"><span>タグ</span></a></li>
              </ul>
          </section>
      </div>
      <div class="question">
          <p class="title">質問タイトル</p>
          <p class="text">質問本文(1行で収まるように表示できる文字数を制限する)質問本文(1行で収まるように表示できる文字数を制限する)質問本文(1行で収まるように表示できる文字数を制限する)質問本文(1行で収まるように表示できる文字数を制限する)質問本文(1行で収まるように表示できる文字数を制限する)</p>
          <img class="message_icon" src="images/message_icon.png">
          <p class="message_icon_number">回答数</p>
          <p class="text2">日付</p>
          <p class="text2">時間</p>
          <a class="text2" href="">投稿者名</a>
          <section class="tag">
              <ul>
                  <li><a href="#"><span>タグ</span></a></li>
                  <li><a href="#"><span>タグ</span></a></li>
              </ul>
          </section>
      </div>
  </div>
  </div>
  <input id="TAB-02" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-02">回答履歴</label>
  <div class="tab-content">
      <div class="content_class">
        <div class="question">
            <p class="title">回答した質問タイトル</p>
            <p class="text2">日付</p>
            <p class="text2">時間</p>
            <a class="text2" href="">投稿者名</a>
            <section class="tag">
                <ul>
                    <li><a href="#"><span>タグ</span></a></li>
                    <li><a href="#"><span>タグ</span></a></li>
                </ul>
            </section>
                <p class="text">ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。
                ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。
                </p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">7</p>
        </div>
        <div class="question">
            <p class="title">回答した質問タイトル</p>
            <p class="text2">日付</p>
            <p class="text2">時間</p>
            <a class="text2" href="">投稿者名</a>
            <section class="tag">
                <ul>
                    <li><a href="#"><span>タグ</span></a></li>
                    <li><a href="#"><span>タグ</span></a></li>
                </ul>
            </section>
            <p class="text">ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。
                ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。ここには回答内容が入ります。
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
