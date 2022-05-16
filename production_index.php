<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="./css/style.css">
 <link rel="stylesheet" href="./css/production_index.css">
 <?php
    require_once("./header.php");
 ?>
 <title>制作物一覧画面</title>
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
                <a href="./production_write.php" class="a_btn">制作物を投稿</a>
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
        </div>

                <div class="ko3">
                    <ul class="example2">
                        <li class="this"><p class="position-senter">1</p></li>
                        <li><a href="./production_index.php"><p class="position-senter">2</p></a></li>
                        <li><a href="./production_index.php"><p class="position-senter">次へ</p></a></li>
                        </ul>
                </div>

                <div class="table_1">
                <table class="production_page">
                        <tr>
                            <td class="image_td">
                                <img class="image" src="./images/image_3.jpg">
                            </td>
                            <td class="midasi_td">
                                <span class="time_span">月/日　時：分<br></span>
                                <img class="icon" src="./images/user_icon_1.png">
                                <span class="profile_span">コース名<br>user name</span>
                                <div class="production_div">
                                    <a href="./production.php">
                                        <span class="production_span">制作物名</span>
                                    </a>
                                </div>
                                <img class="message_icon" src="./images/message_icon.png">
                                <span class="span_inline">コメント数</span>
                                <span class="tag"><ul><li><a>タグ名</a></li></ul></span>
                                <span class="tag"><ul><li><a>タグ名</a></li></ul></span>
                            </td>
                        </tr>
                </table><br>

                <table class="production_page">
                        <tr>
                            <td class="image_td">
                                <img class="image" src="./images/image_3.jpg">
                            </td>
                            <td class="midasi_td">
                                <span class="time_span">月/日　時：分<br></span>
                                <img class="icon" src="./images/user_icon_1.png">
                                <span class="profile_span">コース名<br>user name</span>
                                <div class="production_div">
                                    <a href="./production.php">
                                        <span class="production_span">制作物名</span>
                                    </a>
                                </div>
                                <img class="message_icon" src="./images/message_icon.png">
                                <span class="span_inline">コメント数</span>
                                <span class="tag"><ul><li><a>タグ名</a></li></ul></span>
                                <span class="tag"><ul><li><a>タグ名</a></li></ul></span>
                                <span class="tag"><ul><li><a>タグ名</a></li></ul></span>
                            </td>
                        </tr>
                </table>
                </div>

                <div class="ko3">
                    <ul class="example2">
                        <li class="this"><p class="position-senter">1</p></li>
                        <li><a href=""><p class="position-senter">2</p></a></li>
                        <li><a href=""><p class="position-senter">次へ</p></a></li>
                    </ul>
                </div>
    </form>
    </div>
  </body>
</html>
