<?php

// var_dump($_POST);
// exit();

$brand = $_POST["brand"];
$reason = $_POST["reason"];

$write_data = "{$brand}{$reason}\n";

// var_dump($write_data);
// exit();

$file = fopen('data/data.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:sakereview_txt_index.php");
exit();
