<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>記事一覧画面</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<?php
    require_once("./header.php");
?>
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
                        <!-- 記事投稿画面がないため、リンク先を設定しない -->
                        <a href="./article_posting.php" class="a_btn">投稿</a>
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
                <!-- 記事１ -->
                <article class="article">
                    <figure>
                        <img src="images/image_1.jpg">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>macbook Air と macbook Pro の違い</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>Mac</span></a></li>
                                <li><a href="#"><span>プログラマー</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月16日</time>

                        <p>普段Windowsを使っている方でmacbook Air と macbook Pro の違いについて理解をしている方が少ないと感じたのでこの記事を書きました。興味が湧けば是非こちら側（Mac）にお越しください。</p>
                    </div>
                </article>
                <!-- 記事２ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_c.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>一週間で身につくのC言語基礎入門編</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>C言語</span></a></li>
                                <li><a href="#"><span>初学者</span></a></li>
                            </ul>
                        </section>

                        <time class="article-date">2022年4月15日</time>

                        <p>これからプログラミングを学ぶ初心者に、C言語を1週間で身につけてもらうための内容です。内容は次のようになっています。その1,プログラミングとは何か。C言語とは何かを解説します。</p>
                    </div>
                </article>
                <!-- 記事3 -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_linux-tux.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>Linuxで使える便利なコマンド一覧</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>Linux</span></a></li>
                                <li><a href="#"><span>サーバー</span></a></li>
                            </ul>
                        </section>

                        <time class="article-date">2022年4月14日</time>

                        <p>Linuxのコマンドに初めて触れた際、覚えること多すぎて頭おかしなるわ!!!となってしまった方も多いと思います。ですが、実際によく使うコマンドはそこまで多くありません。</p>
                    </div>
                </article>
                <!-- 記事４ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_vue.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>Vue.jsとは何なのか5分で解説してみた</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>JavaScript</span></a></li>
                                <li><a href="#"><span>フレームワーク</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月13日</time>

                        <p>Vue.jsはユーザーインターフェイスを構築するためのJavaScriptフレームワークです。開発で必要な機能がセットになったツールだと認識して貰えば良いと思います。</p>
                    </div>
                </article>
                <!-- 記事５ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_java.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>Javaが難しいとされている理由</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>Java</span></a></li>
                                <li><a href="#"><span>プログラミング</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月12日</time>

                        <p>Javaは他の言語と比べるとルールや記述が多く、やや難解な印象を与えてしまいますが、実はそうではありません。市場価値が少なくないJavaの習得方法を記述していきたいと思います。</p>
                    </div>
                </article>
                <!-- 記事６ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_github.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>Gitを用いたチーム開発講座</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>Git</span></a></li>
                                <li><a href="#"><span>チーム開発</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月11日</time>

                        <p>神戸電子専門学校IT分野でチーム開発が課題として少なくないので、今までGitを使ったことのない人にもわかりやすいように解説していきたいと思います。</p>
                    </div>
                </article>

                <article class="article">
                    <figure>
                        <img src="images/article_index_python.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>Pythonで簡単なAIを作る方法</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>Python</span></a></li>
                                <li><a href="#"><span>AI（人工知能）</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月10日</time>

                        <p>Pythonといえば機械学習というイメージを持つ人も少なくないのではないではないでしょうか。今回は誰でも簡単に機械学習を用いたAIを作っていきたいと思います。</p>
                    </div>
                </article>
                <!-- 記事７ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_c.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>C言語で個人的に一番難しいポインタについて解説する</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>C言語</span></a></li>
                                <li><a href="#"><span>プログラミング</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月10日</time>

                        <p>ポインタはC言語を学習する上で手が止まる分野です。ポインタについて理解するにはコンピュータの内部処理について理解することが重要です。</p>
                    </div>
                </article>
                <!-- 記事８ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_ruby.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>Rubyがよくわかるようになる方法</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>Ruby</span></a></li>
                                <li><a href="#"><span>Web開発</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月9日</time>

                        <p>日本人のまつもとひろゆき氏によって生み出されたこの言語は純国産プログラミング言語として初めて国際電気標準会議で国際規格に認定されました。Rubyの大きな特徴はパッケージの豊富さです。</p>
                    </div>
                </article>
                <!-- 記事９ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_xampp.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>xamppの使い方とその設定方法</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>PHP</span></a></li>
                                <li><a href="#"><span>プログラミング</span></a></li>
                            </ul>
                        </section>
                        <time class="article-date">2022年4月9日</time>

                        <p>xampp（ザンプ）は、アプリケーション開発に欠かせないソフトウェアやツールをまとめてインストールすることができるパッケージのことです。xamppの基礎から丁寧に解説していきます。</p>
                    </div>
                </article>
                <!-- 記事１０ -->
                <article class="article">
                    <figure>
                        <img src="images/article_index_c.png">
                    </figure>

                    <div class="article-info">
                        <a href="./article.php">
                            <h1>C言語が挫折しやすいと言われている原因</h1>
                        </a>
                        <section class="tag">
                            <ul>
                                <li><a href="#"><span>C言語</span></a></li>
                                <li><a href="#"><span>プログラミング</span></a></li>
                            </ul>
                        </section>

                        <time class="article-date">2022年4月8日</time>

                        <p>C言語はプログラミング言語の一つで、あらゆる言語の元となった言語として有名です。組み込み系でよく使われているイメージが強いと思います。</p>
                    </div>
                </article>

                <div class="ko3">
                    <ul class="example2">
                        <!-- ２ページ目以降の画面がない -->
                        <li class="this"><p class="position-senter">1</p></li>
                        <li><a href="./index.php"><p class="position-senter">2</p></a></li>
                        <li><a href="./index.php"><p class="position-senter">次へ</p></a></li>
                        </ul>
                </div>
        </div>
    </div>
</body>
</html>
