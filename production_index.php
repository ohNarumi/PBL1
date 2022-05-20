<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>制作物一覧画面</title>
 <link rel="stylesheet" href="./css/style.css">
 <link rel="stylesheet" href="./css/production_index.css">
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
                <a class="a_btn" href="production_write.php">制作物を投稿</a>
            </div>
        </div>

        <div class="Gap-top">
            <div class="ko2">
                <div class="narrow_accordion" onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
                    <a style="cursor:pointer;">▼絞り込み</a>
                </div>

                <div id="menu1" style="display:none;clear:both;">
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

        <div class="ko3">
            <ul class="example2">
                <li class="this"><p class="position-senter">1</p></li>
                <li><a href="./production_index.php"><p class="position-senter">2</p></a></li>
                <li><a href="./production_index.php"><p class="position-senter">次へ</p></a></li>
            </ul>
        </div>

                <div class="ko4">
                    <div class="image_td">
                        <a href="./production.php">
                        <img class="image" src="./images/mevo_image.png">
                        </a>
                    </div>
                    <div class="midasi_td">
                        <a class="a_link" href="./production.php">
                        <div class="time_span_div">
                            <span class="time_span">2022/4/21 20:00<br></span>
                        </div>
                        <div class="flex_div">
                            <div class="icon_div">
                                <img class="icon" src="./images/profile_icon.png">
                            </div>
                            <div class="profile_span_div">
                                <span class="profile_span">ソフトⅣ<br>神戸　電子</span>
                            </div>
                            <div class="production_span_div">
                                <span class="production_span">mevo</span>
                            </div>
                        </div>
                        </a>
                        <div class="flex_div2">
                            <div class="message_icon_div">
                                <img class="message_icon" src="./images/message_icon.png">
                            </div>
                            <div class="span_inline_div">
                                <span class="span_inline">3</span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>C#</a></li></ul></span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>flutter</a></li></ul></span>
                            </div>
                        </div>
                    </div>
                </div><br>

                <div class="ko4">
                    <div class="image_td">
                        <a href="./production.php">
                        <img class="image" src="./images/bg_kaitenzushi.jpg">
                        </a>
                    </div>
                    <div class="midasi_td">
                        <a class="a_link" href="./production.php">
                        <div class="time_span_div">
                            <span class="time_span">2022/4/20 21:00<br></span>
                        </div>
                        <div class="flex_div">
                            <div class="icon_div">
                                <img class="icon" src="./images/user_icon_1.png">
                            </div>
                            <div class="profile_span_div">
                                <span class="profile_span">ソフトⅡ<br>佐藤　鮨</span>
                            </div>
                            <div class="production_span_div">
                                <span class="production_span">寿司名人</span>
                            </div>
                        </div>
                        </a>
                        <div class="flex_div2">
                            <div class="message_icon_div">
                                <img class="message_icon" src="./images/message_icon.png">
                            </div>
                            <div class="span_inline_div">
                                <span class="span_inline">3</span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>html</a></li></ul></span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>css</a></li></ul></span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>javascript</a></li></ul></span>
                            </div>
                        </div>
                    </div>
                </div><br>

                <div class="ko4">
                    <div class="image_td">
                        <a href="./production.php">
                        <img class="image" src="./images/$RL97BMW.png">
                        </a>
                    </div>
                    <div class="midasi_td">
                        <a class="a_link" href="./production.php">
                        <div class="time_span_div">
                            <span class="time_span">2022/4/13 11:00<br></span>
                        </div>
                        <div class="flex_div">
                            <div class="icon_div">
                                <img class="icon" src="./images/user_icon_2.png">
                            </div>
                            <div class="profile_span_div">
                                <span class="profile_span">ソフトⅢ<br>山田  握飯</span>
                            </div>
                            <div class="production_span_div">
                                <span class="production_span">rapture</span>
                            </div>
                        </div>
                        </a>
                        <div class="flex_div2">
                            <div class="message_icon_div">
                                <img class="message_icon" src="./images/message_icon.png">
                            </div>
                            <div class="span_inline_div">
                                <span class="span_inline">3</span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>C#</a></li></ul></span>
                            </div>
                        </div>
                    </div>
                </div><br>

                <div class="ko4">
                    <div class="image_td">
                        <a href="">
                        <img class="image" src="./images/image_4.jpg">
                        </a>
                    </div>
                    <div class="midasi_td">
                        <a class="a_link" href="">
                        <div class="time_span_div">
                            <span class="time_span">2022/4/11 10:00<br></span>
                        </div>
                        <div class="flex_div">
                            <div class="icon_div">
                                <img class="icon" src="./images/user_icon_4.jpg">
                            </div>
                            <div class="profile_span_div">
                                <span class="profile_span">ソフトⅣ<br>佐藤　太郎</span>
                            </div>
                            <div class="production_span_div">
                                <span class="production_span">cheese</span>
                            </div>
                        </div>
                        </a>
                        <div class="flex_div2">
                            <div class="message_icon_div">
                                <img class="message_icon" src="./images/message_icon.png">
                            </div>
                            <div class="span_inline_div">
                                <span class="span_inline">3</span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>C#</a></li></ul></span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>flutter</a></li></ul></span>
                            </div>
                        </div>
                    </div>
                </div><br>

                <div class="ko4">
                    <div class="image_td">
                        <a href="">
                        <img class="image" src="./images/image_2.png">
                        </a>
                    </div>
                    <div class="midasi_td">
                        <a class="a_link" href="">
                        <div class="time_span_div">
                            <span class="time_span">2022/4/10 15:00<br></span>
                        </div>
                        <div class="flex_div">
                            <div class="icon_div">
                                <img class="icon" src="./images/profile_icon.png">
                            </div>
                            <div class="profile_span_div">
                                <span class="profile_span">ソフトⅠ<br>山田　太郎</span>
                            </div>
                            <div class="production_span_div">
                                <span class="production_span">KIC</span>
                            </div>
                        </div>
                        </a>
                        <div class="flex_div2">
                            <div class="message_icon_div">
                                <img class="message_icon" src="./images/message_icon.png">
                            </div>
                            <div class="span_inline_div">
                                <span class="span_inline">3</span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>C#</a></li></ul></span>
                            </div>
                            <div class="tag_div">
                                <span class="tag"><ul><li><a>flutter</a></li></ul></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ko3">
                    <ul class="example2">
                        <li class="this"><p class="position-senter">1</p></li>
                        <li><a href="./production_index.php"><p class="position-senter">2</p></a></li>
                        <li><a href="./production_index.php"><p class="position-senter">次へ</p></a></li>
                    </ul>
                </div>
    </form>
    </div>
  </body>
</html>
