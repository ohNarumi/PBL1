<!DOCTYPE html>

<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>記事投稿画面</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/article_posting.css">
    </head>

    <body>
        <!--　リセットボタン　-->
        <input type="reset" value="リセット" class="riset_button" style="position: relative; top:15px; left:2%;">

        <!--　投稿ボタン　-->
        <input type="submit" name="submit" value="投稿" class="btn" style="position: relative; top:15px; left:70%;">
        <br>

        <div class="flex">
            <p style="position: relative; top:15px; left:3%;"><br><br>タイトル</p>
                <input class="textbox" type="text" name="title" style="position: relative; top:15px; left:3%;">
            <p style="position: relative; top:15px; left:3%;"><br>投稿内容</p>
                <textarea class="textarea" type="text" name="toukou" rows=”18″ cols=”40″ wrap=”hard” style="position: relative; top:15px; left:3%;"></textarea>

            <div class="box1" style="position: relative;">
        </div>

        <br><br>
        <input type="file" style="position: relative; top:15px; left:3%;">

        

    </body>
    
</html>