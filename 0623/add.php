<?php
# add.php
require_once ("functions.php");

if(empty($_POST['title'])){
    echo "タイトルは必須です";
    exit;
}
if(!preg_match('/\A[[:^cntrl:]]{1,200}\z/u', $_POST['title'])){
    echo "タイトルは200文字までです。";
    exit;
}
if(!preg_match('/\A\d{0,13}\z/u', $_POST['isbn'])){
    echo "ISBNは数字13桁までです。";
    exit;
}
if(!preg_match('/\A\d{0,6}\z/u', $_POST['price'])){
    echo "価格は数値6桁までです。";
    exit;
}
if(empty($_POST['publish'])){
    echo "日付は必須です。";
    exit;
}
if(!preg_match('/\A\d{4}-\d{1,2}-\d{1,2}\z/u', $_POST['publish'])){
    echo "日付のフォーマットが違います。";
    exit;
}
$date = explode('-', $_POST['publish']);
if(!checkdate($date[1], $date[2], $date[0])){
    echo "正しい日付を入力してください。";
    exit;
}
if(!preg_match('/\A[[:^cntrl:]]{1,80}\z/u', $_POST['author'])){
    echo "著者名は80文字以内で入力してください。";
    exit;
}

try{
$dbh = db_open();
$sql = 'INSERT INTO books (id, title, isbn, price, publish, author) VALUES (NULL, :title, :isbn, :price, :publish, :author)';
$stmt = $dbh->prepare($sql);

// var_dump($stmt);

$price = (int) $_POST['price'];
$stmt -> bindParam(':title', $_POST['title'], PDO::PARAM_STR);
$stmt -> bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
$stmt -> bindParam(':price', $price, PDO::PARAM_INT);
$stmt -> bindParam(':publish', $_POST['publish'], PDO::PARAM_STR);
$stmt -> bindParam(':author', $_POST['author'], PDO::PARAM_STR);

$stmt->execute();
echo "データが追加されました。<br>";
echo "<a href='list.php'>リストへ戻る</a>";
} catch(PDOException $e) {
  //例外をcatchしてエラーメッセージを表示
  //XSS対策のためにエスケープ
  echo '接続失敗: ' . str2html($e->getMessage()). "<br>";
  exit;
}

// $_POSTは、フォームから送信されたデータを格納する連想配列
var_dump($_POST);