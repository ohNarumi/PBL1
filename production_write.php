<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>制作物投稿画面</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/production_write.css">
<?php
    require_once("./header.php")
?>
</head>

    <body>
        <form>
            <div class="oya">
                <!--　リセットボタン　-->
                <input type="reset" value="リセット" class="riset_button" style="position:absolute; top:15px; left:1%;">

                <!--　投稿ボタン　-->
                <input type="button" name="submit" value="投稿" class="btn" style="position:absolute; top:15px; right:1%;" onclick='location.href="http://localhost/PBL1/production_index.php"'>

                <!--　タイトル表示　-->
                <p style="position:absolute; top:90px; left:20px; left:2%;">
                    タイトル
                </p>

                <!--　タイトル入力欄　-->
                <input class="textbox" type="text" name="name" value="ここにはタイトルが入ります" style="position:absolute; top:130px; left:2%;">

                <!--　概要・アピール・動作環境入力欄　-->
                <div class="tab-wrap" style="position:absolute; top:180px; left:2%;width:66%;">
                    <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" /><label class="tab-label" for="TAB-01">　概要　</label>
                    <div class="tab-content">
                        <textarea class="textarea" name="name1" rows=”3″ cols=”50″ wrap=”hard” style="position:absolute; left:-1px;">ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。ここには概要が入ります。
                        </textarea>
                    </div>
                    <input id="TAB-02" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-02">アピール</label>
                    <div class="tab-content">
                        <textarea class="textarea" name="name2" rows=”3″ cols=”50″ wrap=”hard” style="position:absolute; left:-1px;">ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。ここにはアピールが入ります。
                        </textarea>
                    </div>
                    <input id="TAB-03" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-03">動作環境</label>
                    <div class="tab-content">
                        <textarea class="textarea" name="name3" rows=”3″ cols=”50″ wrap=”hard” style="position:absolute; left:-1px;">OS:Windowse&#13;&#10;&#13;&#10;推奨ブラウザ：Chrom&#13;&#10;&#13;&#10;その他：なし
                        </textarea>
                    </div>
                </div>

                <!--　URL・添付ファイル　ゾーン　-->
                <div class="box5">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:0px;">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:100px;">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:200px;">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:300px;">
                    <div class="p3" style="position:absolute; top:85px; left:0px;">
                        〇〇〇.jar
                    </div>

                    <div class="p3" style="position:absolute; top:85px; left:100px;">
                        〇〇〇.txt
                    </div>

                    <div class="p3" style="position:absolute; top:85px; left:205px;">
                        〇〇〇.doxt
                    </div>
                    <div class="p3" style="position:absolute; top:85px; left:305px;">
                        〇〇〇.doxt
                    </div>
                    <div class="wrapper" style="position:absolute; top:-70px; left:10px;">
                        <div class="contents">
                        </div>
                    </div>
                </div>

                <!--　写真　ゾーン　-->
                <div class="box6">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:0px;">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:100px;">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:200px;">
                    <img src="./images/image_4.png" width="60" height="60" style="position:absolute; top:15px; left:300px;">
                    <div class="p3" style="position:absolute; top:85px; left:0px;">
                        〇〇〇.jpg
                    </div>

                    <div class="p3" style="position:absolute; top:85px; left:100px;">
                        〇〇〇.png
                    </div>

                    <div class="p3" style="position:absolute; top:85px; left:205px;">
                        〇〇〇.png
                    </div>
                    <div class="p3" style="position:absolute; top:85px; left:305px;">
                        〇〇〇.png
                    </div>
                    <div class="wrapper" style="position:absolute; top:-70px; left:10px;">
                        <div class="contents">
                        </div>
                    </div>
                </div>

                <!--　タグ検索ゾーン　-->
                <div class="box7">
                    <div class="p1" style="position:absolute; top:20px; left:20px;">
                        タグを選択
                    </div>
                    <div style="position:absolute; top:50px; left:2%;">
                        <input type="search" name="search" placeholder="キーワードを入力" class="searche">
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:105px; left:22px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check1">
                        <label class="custom-control-label" for="custom-check1">Java</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:135px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check2">
                        <label class="custom-control-label" for="custom-check2">C#</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:165px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check3" checked="checked">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:195px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check4">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:225px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check5" checked="checked">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:255px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check6" checked="checked">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:285px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check7">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:315px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check8" checked="checked">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:345px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check9" checked="checked">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="form-check-inline" style="position:absolute; top:375px; left:21px;transform:scale(1.2);">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check9" checked="checked">
                        <label class="custom-control-label" for="custom-check3">〇〇</label>
                        </div>
                    </div>
                    <div class="p1" style="position:absolute; top:425px; left:20px;">
                        <u>選択済み</u>
                    </div>
                    <div class="p1" style="position:absolute; top:450px; left:20px;">
                        〇〇〇　,　〇〇〇　,　〇〇〇
                        <br>
                        〇〇〇　,　〇〇〇　,　〇〇〇
                        <br>
                        〇〇〇　,　〇〇〇　,　〇〇〇
                    </div>
                    <div class="wrapper2" style="position:absolute; top:105px; right:10px;">
                        <div class="contents">
                        </div>
                    </div>
                </div>

                <div class="wrap">
                    <p style="position:absolute; top:560px; left:2%;">
                        添付物・URL
                    </p>

                    <div style="position:absolute; top:557.5px; left:10%;">
                        <input type="submit" name="submit" value="URL" class="fail_button" >
                    </div>

                    <div style="position:absolute; top:557.5px; left:22%;">
                        <input type="submit" name="submit" value="ファイル選択" class="fail_button" >
                    </div>

                    <div class="p" style="position:absolute; top:560px; left:37%;">
                        画像
                    </div>

                    <div style="position:absolute; top:557.5px; left:50%;">
                        <input type="submit" name="submit" value="画像を選択" class="fail_button" >
                    </div>
                </div>
            </div>
        </form>
    </body>

</html>
