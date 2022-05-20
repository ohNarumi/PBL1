<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/question_index.css">
    <?php
        require_once("./header.php");
    ?>
    <title>質問一覧画面</title>
</head>
<body>
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
                <a href="./question_write.php" class="a_btn">質問を投稿</a>
            </div>
        </div>
        <div class="Gap-top">
            <div class="narrow">

                <div class="narrow_accordion" onclick="obj=document.getElementById('narrow_menu').style; obj.display=(obj.display=='none')?'block':'none';">
                    <a style="cursor:pointer;">▼絞り込み</a>
                </div>

                <div id="narrow_menu" style="display:none;clear:both;">
                    <span>絞り込み：</span>
                    <div>
                        <input type="checkbox" id="scales" name="C言語"><label for="C言語">C言語</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="Java"><label for="Java">Java</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="Python"><label for="Python">Python</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="PHP"><label for="PHP">PHP</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="HTML"><label for="HTML">HTML</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="CSS"><label for="CSS">CSS</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="IoT"><label for="IoT">IoT</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="javascript"><label for="javascript">javascript</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="flutter"><label for="flutter">flutter</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="Ruby"><label for="Ruby">Ruby</label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="Linux"><label for="Linux">Linux</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="area">
            <input type="radio" name="tab_name" id="tab1" checked>
            <label class="tab_class" for="tab1">未解決</label>
            <div class="content_class">
                <!-- 未解決質問その１ -->
                <div class="question border_yellow">
                    <a href="./question.php">
                        <p class="title">Rubyのif文がループしない</p>
                    </a>
                    <p class="text">if文を用いて条件分岐を指定したのですが、初めに「1か2以外の数字を指定」した後に「1」あるいは「2」を入力しても、それぞれの条件分岐に進まずに処理自体が終了してしまいます。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">2</p>
                    <p class="text2">2022/5/13</p>
                    <p class="text2">09:59</p>
                    <a class="text2" href="./profile.php">神戸　太郎</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Ruby</span></a></li>
                            <li><a href="#"><span>初学者</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 未解決質問その２ -->
                <div class="question border_green">
                    <a href="./question.php">
                        <p class="title">Pythonで簡易的なGUIのアプリを作りたいのですがおすすめのフレームワークありますか？</p>
                    </a>
                    <p class="text">Pythonの基本文法を学んだ初心者です。ちゃんと勉強したことが頭に入っているかどうか試してみたいので実際にアプリを作ってみたいと考えています。そこでおすすめのフレームワーク等があれば教えて欲しいです!</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">7</p>
                    <p class="text2">2022/5/14</p>
                    <p class="text2">12:00</p>
                    <a class="text2" href="./profile.php">武藤　珈琲</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Python</span></a></li>
                            <li><a href="#"><span>プログラミング</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 未解決質問その３ -->
                <div class="question border_red">
                    <a href="./question.php">
                        <p class="title">AWS SSOでこのようなエラーが出ます。</p>
                    </a>
                    <p class="text">AWS SSOでno accessエラーが出てしまいます。「Provide your administrator with the following info: No access」解決方法」解決方法がわかりません。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">5</p>
                    <p class="text2">2022/5/14</p>
                    <p class="text2">16:07</p>
                    <a class="text2" href="./profile.php">真奥　貞夫</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>AWS</span></a></li>
                            <li><a href="#"><span>SSO</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 未解決質問その4 -->
                <div class="question border_red">
                    <a href="./question.php">
                        <p class="title">DjangoでCSSファイルが読み込めないです。</p>
                    </a>
                    <p class="text">独学でDjangoの勉強をしているのですが、どのようにしてもDjangoでCSSファイルを読み込むことができません。もし詳しい方がいればアドバイスいただけると嬉しいです。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">10</p>
                    <p class="text2">2022/5/15</p>
                    <p class="text2">07:00</p>
                    <a class="text2" href="./profile.php">佐倉　千代</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Django</span></a></li>
                            <li><a href="#"><span>Python</span></a></li>
                            <li><a href="#"><span>CSS</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 未解決質問その5 -->
                <div class="question border_yellow">
                    <a href="./question.php">
                        <p class="title">Javaで特定のファイルのみを表示したいのですが……</p>
                    </a>
                    <p class="text">特定のファイルのが表示されているようにプログラムを組んでいるはずなのですが、全てのファイルが表示されてしまいます。解決方法がわかりません。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">12</p>
                    <p class="text2">2022/5/16</p>
                    <p class="text2">23:00</p>
                    <a class="text2" href="./profile.php">志摩　リン</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Java</span></a></li>
                            <li><a href="#"><span>プログラム</span></a></li>
                        </ul>
                    </section>
                </div>

            <div class="ko3">
                <ul class="example2">
                    <li class="this"><p class="position-senter">1</p></li>
                    <!-- <li><a href="./question_index_2.php"><p class="position-senter">2</p></a></li> -->
                    <li><a href="./question_index_2.php"><p class="position-senter">次へ</p></a></li>
                </ul>
            </div>
        </div>

            <input type="radio" name="tab_name" id="tab2" >
            <label class="tab_class" for="tab2">解決済</label>
            <div class="content_class">
                <!-- 解決済質問その１ -->
                <div class="question border_green">
                    <a href="./question.php">
                        <p class="title">Gitで他の人が作業していたブランチで作業したいです。</p>
                    </a>
                    <p class="text">Gitを用いたグループ開発を行なっています。複数人でGitを使うのが初めてで、他のメンバーが作成したブランチを使って共同作業したいのですがわかりません。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">0</p>
                    <p class="text2">2022/5/10</p>
                    <p class="text2">07:50</p>
                    <a class="text2" href="./profile.php">折木　奉太郎</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Git</span></a></li>
                            <li><a href="#"><span>チーム開発</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 解決済質問その2 -->
                <div class="question border_green">
                    <a href="./question.php">
                        <p class="title">HTMLとCSSだけで5段階評価を作りたいです。</p>
                    </a>
                    <p class="text">HTMLとCSSだけで5段階評価を作りたいです。課題でどうしても必要になったのですが、HTMLとCSSは一度も触れたことがなくそもそもできるのかどうかもわかりません。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">0</p>
                    <p class="text2">2022/5/10</p>
                    <p class="text2">09:58</p>
                    <a class="text2" href="./profile.php">久石　譲</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>HTML</span></a></li>
                            <li><a href="#"><span>CSS</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 解決済質問その3 -->
                <div class="question border_yellow">
                    <a href="./question.php">
                        <p class="title">Dockerのイメージとコンテナの削除の仕方がわかりません。</p>
                    </a>
                    <p class="text">docker imageのコマンドを打つとどんどん溜まっているイメージを削除したいのですが、方法がわからないです。今年からDockerを使い始めたので初心者にもわかりやすく教えて頂けると嬉しいです。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">0</p>
                    <p class="text2">2022/5/11</p>
                    <p class="text2">23:28</p>
                    <a class="text2" href="./profile.php">司波　達也</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Docker</span></a></li>
                            <li><a href="#"><span>初学者</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 解決済質問その4 -->
                <div class="question border_green">
                    <a href="./question.php">
                        <p class="title">Pythonであみだくじのアプリを作っています。</p>
                    </a>
                    <p class="text">Tkinterというフレームを用いてあみだくじのアプリを作っています。GUIのアプリケーションを作るのは初めてでわからないことがあったので質問を投稿させていただきました。</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">0</p>
                    <p class="text2">2022/5/12</p>
                    <p class="text2">12:34</p>
                    <a class="text2" href="./profile.php">関　優太</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Python</span></a></li>
                            <li><a href="#"><span>フレームワーク</span></a></li>
                        </ul>
                    </section>
                </div>
                <!-- 解決済質問その5 -->
                <div class="question border_red">
                    <a href="./question.php">
                        <p class="title">Linuxで消えたファイルを復活させる方法はありますか？</p>
                    </a>
                    <p class="text">間違ったディレクトリにファイルを作ってしまったのでファイルを移動させてみたらファイルが消えてしまったのですが、とても重要なファイルなので復活させることができるならさせたいです。誰か助けてください！！</p>
                    <img class="message_icon" src="./images/message_icon.png">
                    <p class="message_icon_number">0</p>
                    <p class="text2">2022/5/13</p>
                    <p class="text2">14:50</p>
                    <a class="text2" href="./profile.php">杉本　佐一</a>
                    <section class="tag">
                        <ul>
                            <li><a href="#"><span>Linux</span></a></li>
                            <li><a href="#"><span>サーバー</span></a></li>
                        </ul>
                    </section>
                </div>

                <div class="ko3">
                <ul class="example2">
                    <li class="this"><p class="position-senter">1</p></li>
                    <!-- <li><a href="./question_index_2.php"><p class="position-senter">2</p></a></li> -->
                    <li><a href="./question_index_2.php"><p class="position-senter">次へ</p></a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
