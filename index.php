<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>記事一覧画面</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
<!--.oyaで全体のwidhtサイズを決める-->
    <div class="oya">
        <form action="" method="post">

            <div class="ko1">
                <div class="search_div">
                    <input class="box_search" type="search" name="search" placeholder="キーワードを入力">
                </div>

                    <div class="btn_search_div">
                        <button class="btn_search">検索</button>
                    </div>

                    <div class="cp_ipselect_div">
                        <select class="cp_ipselect">
                        <option hidden>並び替え</option>
                        <option value="1">新着順</option>
                        <option value="2">古い順</option>
                        <option value="3">コメント数が多い順</option>
                        <option value="4">コメント数が少ない順</option>
                        <option value="5">閲覧数が多い順</option>
                        <option value="6">閲覧数が少ない順</option>
                        </select>
                    </div>

                    <div class="btn_div">
                        <button class="btn">投稿</button>
                    </div>
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

    <div class="ko3">
        <ul class="example2">
            <li class="this"><p class="position-senter">1</p></li>
            <li><a href=""><p class="position-senter">2</p></a></li>
            <li><a href=""><p class="position-senter">次へ</p></a></li>
            </ul>
    </div>

    <h1>最新記事</h1>
    <div id="wrapper">
        <div id="content">
		    <div id="content_main">
                <article class="article">
                    <figure>
                        <img src="images/image_1.jpg">
                    </figure>

                    <div class="article-info">
                        <h1>ここにはタイトルが入ります。ここにはタイトルが入ります。ここにはタイトルが入ります。ここにはタイトルが入ります。ここにはタイトルが入ります。ここにはタイトルが入ります。</h1>

                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>タグ（頭に#をつける）</span></a></li>
                                <li><a href="#"><span>タグ</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月16日</time>

                        <p>ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。</p>
                    </div>
                </article>
                <article class="article">
                    <figure>
                        <img src="images/image_2.png">
                    </figure>

                    <div class="article-info">
                        <h1>ここにはタイトルが入ります。ここにはタイトルが入ります。</h1>

                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>タグ（頭に#をつける）</span></a></li>
                                <li><a href="#"><span>タグ</span></a></li>
                            </ul>
                        </section>

                        <time class="article-date">2022年4月15日</time>

                        <p>ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。</p>
                    </div>
                </article>
                <article class="article">
                    <figure>
                        <img src="images/image_1.jpg">
                    </figure>

                    <div class="article-info">
                        <h1>ここにはタイトルが入ります。ここにはタイトルが入ります。</h1>

                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>タグ（頭に#をつける）</span></a></li>
                                <li><a href="#"><span>タグ</span></a></li>
                            </ul>
                        </section>

                        <time class="article-date">2022年4月14日</time>

                        <p>ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。</p>
                    </div>
                </article>
                <article class="article">
                    <figure>
                        <img src="images/image_3.jpg">
                    </figure>

                    <div class="article-info">
                        <h1>ここにはタイトルが入ります。ここにはタイトルが入ります。</h1>

                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>タグ（頭に#をつける）</span></a></li>
                                <li><a href="#"><span>タグ</span></a></li>
                            </ul>
                        </section>

                        <time class="article-date">2022年4月14日</time>

                        <p>ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。ここには記事のテキストが入ります。</p>
                    </div>
                </article>
                <div class="ko3">
                    <ul class="example2">
                        <li class="this"><p class="position-senter">1</p></li>
                        <li><a href=""><p class="position-senter">2</p></a></li>
                        <li><a href=""><p class="position-senter">次へ</p></a></li>
                        </ul>
                </div>
        </div>
    </div>
</body>
</html>
