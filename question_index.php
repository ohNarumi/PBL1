<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/question_index.css">
    <title>質問一覧画面</title>
</head>
<body>
    <div class="home-content wrapper">
        <div class="content_top">
            <form action="question_index.html" method="get">
                <input class="box_search" type="search" name="search" placeholder="キーワードを入力">
                <input class="btn_search" type="submit" name="submit" value="検索">
            </form>
                <div class="cp_ipselect cp_sl01">
                    <select required>
                    <option value="" hidden>並び替え</option>
                    <option value="1">最終更新日時（新しい順）</option>
                    <option value="2">最終更新日時（古い順）</option>
                    <option value="3">総合評価順</option>
                    <option value="4">回答数（多い順）</option>
                    <option value="5">回答数（少ない順）</option>
                    </select>
                </div>
                <a href="./question_write.html" class="a_btn">質問を投稿</a>
        </div>
        <div class="Gap-top">
            <div class="narrow">

                <div class="narrow_accordion" onclick="obj=document.getElementById('narrow_menu').style; obj.display=(obj.display=='none')?'block':'none';">
                    <a style="cursor:pointer;">▼絞り込み</a>
                </div>

                <div id="narrow_menu" style="display:none;clear:both;">
                    <span>絞り込み：</span>
                    <input type="checkbox" id="scales" name="C言語"><label for="C言語">C言語</label>
                    <input type="checkbox" id="scales" name="Java"><label for="Java">Java</label>
                    <input type="checkbox" id="scales" name="Python"><label for="Python">Python</label>
                    <input type="checkbox" id="scales" name="PHP"><label for="PHP">PHP</label>
                    <input type="checkbox" id="scales" name="HTML"><label for="HTML">HTML</label>
                    <input type="checkbox" id="scales" name="CSS"><label for="CSS">CSS</label>
                    <input type="checkbox" id="scales" name="IoT"><label for="IoT">IoT</label>
                </div>
            </div>
        </div>
        <div class="area">
            <input type="radio" name="tab_name" id="tab1" checked>
            <label class="tab_class" for="tab1">解決済</label>
            <div class="content_class">
                <div class="question">
                    <p class="title">質問タイトル</p>
                    <p class="text">質問本文(1行で収まるように表示できる文字数を制限する)</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">回答数</p>
                    <p class="text2">日付</p>
                    <p class="text2">時間</p>
                    <a class="text2" href="">投稿者名</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>タグ（頭に#をつける）</span></a></li>
                            <li><a href="#"><span>タグ</span></a></li>
                        </ul>
                    </section>
                </div>
                <div class="question">
                    <p class="title">質問タイトル</p>
                    <p class="text">質問本文(1行で収まるように表示できる文字数を制限する)</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">回答数</p>
                    <p class="text2">日付</p>
                    <p class="text2">時間</p>
                    <a class="text2" href="">投稿者名</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>タグ（頭に#をつける）</span></a></li>
                            <li><a href="#"><span>タグ</span></a></li>
                        </ul>
                    </section>
                </div>
            </div>
            <input type="radio" name="tab_name" id="tab2" >
            <label class="tab_class" for="tab2">未解決</label>
            <div class="content_class">

            </div>
        </div>
    </div>
</body>
</html>