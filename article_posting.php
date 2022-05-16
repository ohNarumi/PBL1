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
                <input type="search" name="search" placeholder="キーワードを入力" class="searche" style="position:absolute; left:-2px;">
                <div class="form-check-inline" style="position:absolute; top:65px; left:4%;transform:scale(1.2);">
                    <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="custom-check1">
                    <label class="custom-control-label" for="custom-check1">Java</label>
                    </div>
                </div>
                <div class="form-check-inline" style="position:absolute; top:95px; left:4%;transform:scale(1.2);">
                    <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="custom-check1">
                    <label class="custom-control-label" for="custom-check1">Ruby</label>
                    </div>
                </div>
                <div class="form-check-inline" style="position:absolute; top:125px; left:4%;transform:scale(1.2);">
                    <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="custom-check1">
                    <label class="custom-control-label" for="custom-check1">Rust</label>
                    </div>
                </div>
                <div class="form-check-inline" style="position:absolute; top:155px; left:4%;transform:scale(1.2);">
                    <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="custom-check1">
                    <label class="custom-control-label" for="custom-check1">Vala</label>
                    </div>
                </div>
                <div class="form-check-inline" style="position:absolute; top:185px; left:4%;transform:scale(1.2);">
                    <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="custom-check1">
                    <label class="custom-control-label" for="custom-check1">Lean</label>
                    </div>
                </div>
                <div class="form-check-inline" style="position:absolute; top:215px; left:4%;transform:scale(1.2);">
                    <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="custom-check1">
                    <label class="custom-control-label" for="custom-check1">Dart</label>
                    </div>
                </div>
                <p style="position:absolute; top:240px; left:4%;">
                    <u>選択済み</u>
                    <br>
                    〇〇〇　,　〇〇〇　,　〇〇〇　,
                    〇〇〇　,　〇〇〇　
                </p>
                <div class="wrapper2" style="position:absolute; top:65px; right:10px;">
                    <div class="contents">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <input type="file" style="position: relative; top:15px; left:3%;">
    </body>
    
</html>