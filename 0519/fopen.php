<!-- HTMLのコメント -->
<?php

require_once('function.php');
//一回だけ読み込む
//requireは、読み込まれないとエラーになる→止まる

//データを読み込む（だけ）
$fp = fopen('bookdata.csv', 'r');
//ファイルが開けたか確認
if($fp === false){
    echo 'ファイルのオープンに失敗しました';
    exit;
}

//書籍名と著者名を表示する
while ($row = fgetcsv($fp)) {
  echo '<ul>';
  echo '<li>' . "書籍名："  . str2html($row[0]) . '</li>';
  echo '<li>' . "著者名："  . str2html($row[4]) . '</li>';
  echo '</ul>';
}

