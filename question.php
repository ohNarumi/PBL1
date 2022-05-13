<!DOCTYPE html>
<html labg="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/question_answer.css">
    <link rel="stylesheet" href="./css/question.css">
    <?php
    require_once("./header.php");
    ?>
    <title>質問詳細画面</title>
</head>
<body>
    <!-- タイトル -->
    <div class="question_header">
        <div class="question_title">
            <h1 class="underbar">Rubyのif文がループしない</h1>
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

            <h4 class="underbar">投稿者：　　神戸太郎</h4>
        </div>
        <div class="question_answer_btn">
            <a href="./question_answer.php" class="a_btn">回答する</a>
        </div>
    </div>

    <!-- 質問の内容 -->
    <div class="question_box" >
        <!-- 質問の添付写真 -->
        <div class="question_photo">
            <img src="./images/image_3.jpg" width="768" height="432">
        </div>
        <div class="question_data">
            <p>aaaaaaaaa</p>
        </div>

        <!-- ハッシュタグ -->
        <div class="question_tag">
            <p class="priority_text">困っている度：<span class="priority_rank_text_yellow">中</span></p>
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

    <div>
        <p class="title">回答</p>
        <div class="content_comment">
            <p class="comment_number">1.</p>
            <img class="comment_icon" src="./images/user_icon_maru_1.png">
            <a class="comment_text" href="">コース 名前</a>
            <p class="comment_text">2022/04/22</p>
            <p class="comment_text">12：00</p>
            <p class="comment_text2">質問本文</p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">7</p>
        </div>
        <div class="content_comment">
            <p class="comment_number">2.</p>
            <img class="comment_icon" src="./images/user_icon_maru_1.png">
            <a class="comment_text" href="">ソフトⅣ 神戸 次郎</a>
            <p class="comment_text">2022/04/22</p>
            <p class="comment_text">12：01</p>
            <p class="comment_text2">○○は△△ですか？</p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">7</p>
        </div>
        <div class="content_comment">
            <p class="comment_number">3.</p>
            <img class="comment_icon" src="./images/good.png">
            <a class="comment_text" href="">ソフトⅣ 神戸 三郎</a>
            <p class="comment_text">2022/04/22</p>
            <p class="comment_text">12：01</p><br>
            <a class="comment_text2" href="">>>2</a>
            <p class="comment_text2">□□だと思います。</p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">7</p>
        </div>
        <ul id="pagination">
            <li>1</li>
        </ul>
    </div>
</body>
</html>
