<?php
$str = '';

$file = fopen('data/data.txt', 'r');
flock($file, LOCK_EX);

if ($file) {
  while ($line = fgets($file)) {
        $data = explode(',', $line);
        $str .= "<tr><td>{$data[0]}</td><td>{$data[1]}</td></tr>";
  }
}

flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本酒の好きな銘柄アンケート（入力画面）</title>
</head>

<body>
  <fieldset>
    <legend>日本酒の好きな銘柄アンケート（入力画面）</legend>
    <a href="sakereview_txt_index.php">入力画面</a>
    <table>
      <thead>
        <tr>
        <th>理由</th>
        <th>銘柄</th>  
        </tr>
      </thead>
      <tbody>
          <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>