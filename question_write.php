<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/question_write.css">
    <?php
    require_once("./header.php");
    ?>
    <title>質問投稿画面</title>
</head>
<body>
    <div class="oya">
        <div class="div_1">
            <div class="resetbtn_div">
                <a class="a_btn" href="./question_write.php">リセット</a>
            </div>

            <div class="btn_div">
                <a class="btn" href="./question_index.php">投稿</a>
            </div>
        </div>

        <div class="character_div">
            <div class="title_div">
                <span>タイトル</span>
            </div>
            <div class="trauble_div">
                <span>困っている度</span>
            </div>
        </div>

        <div class="ko_div">
            <div class="ko1">
                <form method="post" action="">
                    <div class="div_2">
                        <span class="title_span">
                            <input class="titletext" type="text" id="title" name="title">
                        </span>

                        <span class="trauble_span">
                            <select class="cp_ipselect" id="pulldown">
                            <option hidden>困っている</option>
                            <option value="1">高</option>
                            <option value="2">中</option>
                            <option value="3">低</option>
                            </select>
                        </span>
                    </div>

                    <div class="div_3">
                        <label class="message" for="message">質問内容</label>
                        <textarea class="messagetext" id="message" name="message"></textarea>
                    </div>
                    <div class="img">
                        <input type="file" name="avatar">
                    </div>
                </form>
            </div>

            <div class="ko2">
                <div class="tag_text_div">
                    <span class="tag_text">
                        タグ選択
                    </span>
                </div>

                <div class="search_div">
                    <input class="box_search" type="search" name="search" placeholder="キーワードを入力">
                </div>

                <div class="checkbox">
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="C言語"><label for="C言語">C言語</label>
                    </div>
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="Java"><label for="Java">Java</label>
                    </div>
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="Python"><label for="Python">Python</label>
                    </div>
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="PHP"><label for="PHP">PHP</label>
                    </div>
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="HTML"><label for="HTML">HTML</label>
                    </div>
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="CSS"><label for="CSS">CSS</label>
                    </div>
                    <div class="checkbox_div">
                        <input type="checkbox" id="scales" name="IoT"><label for="IoT">IoT</label>
                    </div>
                </div>

                <hr>
                <div class="selection">
                    <span>選択済みタグ</span>
                </div>

            </div>
        </div>
    </div>
