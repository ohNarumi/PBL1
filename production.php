<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/production.css">
    <?php
    require_once("./header.php");
    ?>
    <title>制作物詳細画面</title>
</head>
<body>
    <div class="area">
        <input type="radio" name="tab_name" id="tab1" checked>
        <label class="tab_class" for="tab1">制作物</label>
        <div class="content_class">
            <div class="content_top">
                <p class="title">制作物のタイトル</p>
                <p class="content_top_text">投稿日：2022/04/21 20:00<br>投稿者：　 ソフトⅣ 神戸 電子</p>
            </div>
            <section class="tag">
                <ul>
                    <li><a href="#"><span>タグ</span></a></li>
                    <li><a href="#"><span>タグ</span></a></li>
                </ul>
            </section>
            <input type="submit" name="submit" value="編集" class="btn btn_edit" >
            <div class="images_list">
                <img class="production_image" src="./images/image_1.jpg" alt="">
                <img class="production_image" src="./images/image_3.jpg" alt="">
                <img class="production_image" src="./images/image_3.jpg" alt="">
            </div>
            <div class="tab-wrap">
                <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" /><label class="tab-label" for="TAB-01">概要</label>
                <div class="tab-content">
                    メロスは激怒した。必ず、かの邪智暴虐の王を除かなければならぬと決意した。メロスには政治がわからぬ。メロスは、村の牧人である。笛を吹き、羊と遊んで暮して来た。けれども邪悪に対しては、人一倍に敏感であった。きょう未明メロスは村を出発し、野を越え山越え、十里はなれた此のシラクスの市にやって来た。メロスには父も、母も無い。女房も無い。十六の、内気な妹と二人暮しだ。この妹は、村の或る律気な一牧人を、近々、花婿として迎える事になっていた。結婚式も間近かなのである。メロスは、それゆえ、花嫁の衣裳やら祝宴の御馳走やらを買いに、はるばる市にやって来たのだ。
                </div>
                <input id="TAB-02" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-02">アピールポイント</label>
                <div class="tab-content">
                    先ず、その品々を買い集め、それから都の大路をぶらぶら歩いた。メロスには竹馬の友があった。セリヌンティウスである。今は此のシラクスの市で、石工をしている。その友を、これから訪ねてみるつもりなのだ。久しく逢わなかったのだから、訪ねて行くのが楽しみである。歩いているうちにメロスは、まちの様子を怪しく思った。ひっそりしている。
                </div>
                <input id="TAB-03" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-03">その他</label>
                <div class="tab-content">
                    <div>
                        <p class="inline_block">URL：</p>
                        <a class="inline_block" href="">https://github.com/user/production</a>
                    </div>
                    <div>
                        <p class="inline_block">動作環境：</p>
                        <p class="inline_block">Windows10</p>
                    </div>
                    <div>
                        <p class="inline_block">添付ファイル：</p>
                        <a class="inline_block" href="test.pdf" download="test.pdf">ダウンロード</a>
                    </div>
                </div>
            </div>
        </div>
        <input type="radio" name="tab_name" id="tab2" >
        <label class="tab_class" for="tab2">コメント</label>
        <div class="content_class">
            <p class="title">コメント（3件）</p>
            <div class="content_top search_area">
                <form action="" method="">
                    <input class="box_search" type="search" name="search" placeholder="キーワードを入力">
                    <input class="btn_search" type="submit" name="submit" value="検索">
                </form>
                <div class="cp_ipselect_div">
                    <select class="cp_ipselect">
                    <option hidden>並び替え</option>
                    <option value="1">最終更新日時（新しい順）</option>
                    <option value="2">最終更新日時（古い順）</option>
                    <option value="3">総合評価順</option>
                    </select>
                </div>
            </div>
            <div class="content_comment">
                <p class="comment_number">1.</p>
                <input type="checkbox">
                <img class="comment_icon" src="./images/user_icon_maru_1.png">
                <a class="comment_text" href="">コース 名前</a>
                <p class="comment_text">2022/04/22</p>
                <p class="comment_text">12：00</p>
                <p class="comment_text2">質問本文</p>
            </div>
            <div class="content_comment">
                <p class="comment_number">2.</p>
                <input type="checkbox">
                <img class="comment_icon" src="./images/user_icon_maru_1.png">
                <a class="comment_text" href="">ソフトⅣ 神戸 次郎</a>
                <p class="comment_text">2022/04/22</p>
                <p class="comment_text">12：01</p>
                <p class="comment_text2">いいと思います。</p>
            </div>
            <div class="content_comment">
                <p class="comment_number">3.</p>
                <input type="checkbox">
                <img class="comment_icon" src="./images/user_icon_maru_1.png">
                <a class="comment_text" href="">ソフトⅣ 神戸 三郎</a>
                <p class="comment_text">2022/04/22</p>
                <p class="comment_text">12：01</p><br>
                <a class="comment_text2" href="">>>2</a>
                <p class="comment_text2">それな</p>
            </div>
            <ul id="pagination">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>></li>
            </ul>
            <form action="">
                <input type="submit" name="submit" value="コメントを削除する" class="btn btn_edit" >
            </form>
            <p class="title">コメントを投稿する</p>
            <p class="comment_text2">コメントに関する説明が記載されている。（仕様や注意喚起など）</p>
            <form action="">
                <table class="contact-table">
                    <tr>
                        <th class="contact-item">コメント</th>
                        <td class="contact-body">
                            <textarea name="コメント" class="form-textarea"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="投稿する" class="btn contact-submit" >
            </form>
        </div>
    </div>
</body>
</html>
