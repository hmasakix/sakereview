<?php
// テキストファイルをCSVに変換
$inputFile = 'data/data.txt';
$outputFile = 'data/data.csv';

// CSVファイルを開く
$csvFile = fopen($outputFile, 'w');
fprintf($csvFile, chr(0xEF) . chr(0xBB) . chr(0xBF));

// ヘッダーを書き込む
$header = ['brand', 'reason'];
fputcsv($csvFile, $header);

// テキストファイルの各行を読み込み、CSVに書き込む
$lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
    $data = explode(' ', trim($line));
    fputcsv($csvFile, $data);
}

// ファイルを閉じる
fclose($csvFile);

// ダウンロード処理
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="data.csv"');
readfile($outputFile);
exit();
