<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本酒の好きな銘柄アンケート（入力画面）</title>
</head>

<body>
  <form action="sakereview_txt_create.php" method="POST">
    <fieldset>
      <legend>日本酒の好きな銘柄アンケート（入力画面）</legend>
      <a href="sakereview_txt_read.php">一覧画面</a>
      <div>
        銘柄: <input type="text" name="brand">
      </div>
      <div>
        理由: <input type="text" name="reason">
      </div>
      <div>
        <button>保存</button>
      </div>
    </fieldset>
  </form>

</body>

</html>