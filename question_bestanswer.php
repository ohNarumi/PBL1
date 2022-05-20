<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/question_answer.css">
    <link rel="stylesheet" href="./css/question_bestanswer.css">
    <?php
    require_once("./header.php");
    ?>
    <title>質問詳細画面</title>
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
        <div class="question_answer_btn">
            <a href="./question_answer.php" class="a_btn">回答する</a>
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

    <!-- 各ユーザーのページ作成の必要アリ -->
    <div>
        <p class="title">回答２件</p><br>
        <h1 class="bestanswer">ベストアンサー</h1>
          <div class="content_comment_sub">
            <p class="comment_number">2.</p>
            <img class="comment_icon" src="./images/user_icon_maru_3.png">
            <a class="comment_text" href="">ソフトⅣ 神戸 三郎</a>
            <p class="comment_text">2022/05/13</p>
            <p class="comment_text">15：01</p>
            <a href="./question_write.php" class="a_btn comment_question_a_btn">コメントする</a>
            <p class="comment_text2">入力を受け取るところでループして入力値を検証して次に進むのが良いと思います。</p>
            <p class="comment_text2">input_number = ""</p>
            <p class="comment_text2">puts "1(新規でメモを作成) 2(既存のメモ編集する)"</p>
            <p class="comment_text2">while input_number == ""</p>
            <p class="comment_text2">&nbsp;&nbsp;memo_type = gets.to_s</p>
            <p class="comment_text2">&nbsp;&nbsp;input_value = memo_type.chomp</p>
            <p class="comment_text2">&nbsp;&nbsp;if ["1", "2"].include?(input_value)</p>
            <p class="comment_text2">&nbsp;&nbsp;&nbsp;&nbsp;input_number = input_value</p>
            <p class="comment_text2">&nbsp;&nbsp;else</p>
            <p class="comment_text2">&nbsp;&nbsp;&nbsp;&nbsp;puts "1か2の数字を入力してください"</p>
            <p class="comment_text2">&nbsp;&nbsp;end</p>
            <p class="comment_text2">end</p>
            <p class="comment_text2">puts input_number</p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">2</p>

            <div class="content_comment">
                <p class="comment_number">4.</p>
                <img class="comment_icon" src="./images/user_icon_maru_2.png">
                <a class="comment_text" href="">ソフトⅣ 神戸 太郎</a>
                <p class="comment_text">2022/05/14</p>
                <p class="comment_text">08：05</p><br>
                <p class="comment_text2">細かなご指摘ありがとうございます。</p>
                <p class="comment_text2">ご提示いただいたものを参考に打ち込んだ結果、正常に作用しました。</p>
                <p class="comment_text2">ありがとうございました。</p>
                <img class="message_icon" src="images/good.png">
                <p class="message_icon_number">2</p>
            </div>

            <div class="content_comment">
                <p class="comment_number">5.</p>
                <img class="comment_icon" src="./images/user_icon_maru_3.png">
                <a class="comment_text" href="">ソフトⅣ 神戸 三郎</a>
                <p class="comment_text">2022/05/14</p>
                <p class="comment_text">12：32</p><br>
                <p class="comment_text2">書き方はこれだけではありません。 loop do を使うことなどもできますし、関数化するなどの工夫もできます。</p>
                <p class="comment_text2">気になった場合はいろいろな方法を試してみましょう。</p>
                <img class="message_icon" src="images/good.png">
                <p class="message_icon_number">2</p>
            </div>
        </div>
        <div class="content_comment">
            <p class="comment_number">1.</p>
            <img class="comment_icon" src="./images/user_icon_maru_1.png">
            <a class="comment_text" href="">ソフトⅢ 神戸 次郎</a>
            <p class="comment_text">2022/05/13</p>
            <p class="comment_text">10：32</p>
            <a href="./question_write.php" class="a_btn comment_question_a_btn">コメントする</a>
            <p class="comment_text2">そう書いているからそう動作しているだけです。
                else部分で最後にgetsしていますが、そのままプログラムの後方へ進んでいって、条件分岐には戻りません。</p>
            <img class="message_icon" src="images/good.png">
            <p class="message_icon_number">1</p>

            <div class="content_comment">
                <p class="comment_number">3.</p>
                <img class="comment_icon" src="./images/user_icon_maru_2.png">
                <a class="comment_text" href="">ソフトⅣ 神戸 太郎</a>
                <p class="comment_text">2022/05/14</p>
                <p class="comment_text">08：01</p><br>
                <p class="comment_text2">おっしゃる通りで、if文構造の理解が浅はかでした。</p>
                <p class="comment_text2">他にコメントをくださった方のプログラムを参考に打ち込んだところ、正常にループがされました。</p>
                <p class="comment_text2">ありがとうございました。</p>
                <img class="message_icon" src="images/good.png">
                <p class="message_icon_number">1</p>
            </div>
        </div>
        <ul id="pagination">
            <li>1</li>
        </ul>
  </div>
</body>
</html>
