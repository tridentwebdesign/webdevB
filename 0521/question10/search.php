<?php
require_once "../functions.php";
$fp = fopen("songs.csv", "r");
if ($fp === false) {
    echo "ファイルのオープンに失敗しました";
    exit;
}

//formからの値取得
$keyword = $_POST["keyword"];
var_dump($keyword . "<br>");

while ($row = fgetcsv($fp)) {
    foreach ($row as $column) {
        if ($keyword === $column) {
            echo "曲名：" . str2html($row[0]) . "<br>";
            echo "アーティスト名：" . str2html($row[1]) . "<br>";
            echo "ジャンル：" . str2html($row[2]) . "<br>";
            echo "リリース年：" . str2html($row[3]) . "<br>";
            echo "メモ：" . str2html($row[4]) . "<br>";
        }
    }
}
