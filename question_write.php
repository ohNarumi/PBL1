<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/question_write.css">
  <title>質問フォーム</title>
</head>
  <body>
    <form action="" method="post">

    <p>質問投稿</p>
   
    <span class="title-span">質問タイトル</span>

    <div>
      <input class="textbox" type="text" name="name">

        <select class="select">
          <option hidden>優先度</option>
          <option value="high">高</option>
          <option value="middle">中</option>
          <option value="low">低</option>
        </select><br>

        <span class="text">名前</span>
      <input class="textboxname" type="text" name="name">

      <span class="text">質問詳細</span>
      <textarea class="comment" name="comment" cols="30" rows="5"></textarea><br>

      <button class="btn">投稿</button>
    </div>

</form>
</body>
</html>