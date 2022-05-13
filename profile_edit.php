<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>プロフィール編集画面</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/profile_edit.css">
<?php
    require_once("./header.php");
?>
</head>
<body>
<div class="submission">
  <a class="a_btn" href="#">変更を保存する</a>
</div>

<div class="content">
    <figure class="profile-image">
        <div name="user-icon" class="maru2"></div>
    </figure>
    <h1 class="heading-lv1" herf="#"><a herf="#">画像を変更する</a></h1>
</div>

<div class="content_sub">
    <h2 class="heading-lv2 heading-margin">タグを選択する</h2>
        <div class="narrow">
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

<div class="content">
    <h2 class="heading-lv2 heading-margin">名前</h2>
    <div class="search_div">
        <input class="box_search" type="search" name="search">
    </div>
</div>

<div class="content">
    <div class="search_div">
        <input class="box_search" type="search" name="search">
    </div>
    <h2 class="heading-lv2 heading-margin">コース</h2>
    <div class="search_div">
        <input class="box_search" type="search" name="search">
    </div>
    <h2 class="heading-lv2 heading-margin">学科</h2>
</div>

<div class="content">
    <h2 class="heading-lv2 heading-margin">ひとこと</h2>
    <div class="search_div_sub">
        <input class="box_search" type="search" name="search">
    </div>
</div>

<div class="content_sub">
<h2 class="heading-lv2 heading-margin">自己紹介</h2>
<textarea name="コメント" class="form-textarea"></textarea>
</div>
</body>
</html>
