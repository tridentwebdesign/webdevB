<?php
require_once './functions.php';

# ID必須 & バリデーション
if (empty($_POST['id'])) {
    echo "IDを指定してください。";
    exit;
}
if (!preg_match('/\A\d{1,11}\z/u', $_POST['id'])) {
    echo 'IDが正しくありません。';
    exit;
}
$id = (int) $_POST['id'];

# 空欄チェック
if (empty($_POST['title'])) {
    echo 'タイトルは必須です。';
    exit;
}

# 文字数チェック
if (!preg_match('/\A[[:^cntrl:]]{1,200}\z/u', $_POST['title'])) {
    echo 'タイトルは200文字までです。';
    exit;
}

# ISBN（13桁)チェック
if (!preg_match('/\A\d{0,13}\z/u', $_POST['isbn'])) {
    echo 'ISBNは数字13桁までです。';
    exit;
}

# 定価（6桁）チェック
if (!preg_match('/\A\d{0,6}\z/u', $_POST['price'])) {
    echo '定価は数字6桁までです。';
    exit;
}

# 日付必須チェック
if (empty($_POST['publish'])) {
    echo '日付は必須です。';
    exit;
}
# 出版日（yyyy-mm-dd）チェック
if (!preg_match('/\A\d{4}-\d{1,2}-\d{1,2}\z/u', $_POST['publish'])) {
    echo '日付のフォーマットが違います。';
    exit;
}
# 正しい日付チェック
$date = explode('-', $_POST['publish']);
if (!checkdate($date[1], $date[2], $date[0])) {
    echo '正しい日付を入力してください。';
    exit;
}
# 著者（80文字）チェック
if (!preg_match('/\A[[:^cntrl:]]{0,80}\z/u', $_POST['author'])) {
    echo '著者名は80文字以内で入力してください。';
    exit;
}

try {
    $dbh = db_open();

    // SQL UPDATE文
    $sql = "UPDATE books SET title = :title, isbn = :isbn, price = :price, publish = :publish, author = :author WHERE id = :id";
    $stmt = $dbh->prepare($sql);

    $price = (int) $_POST['price'];
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':publish', $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(':author', $_POST['author'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();
    echo "データが更新されました。<br>";
    echo '<a href="list.php">リストに戻る</a>';
} catch (PDOException $e) {
    echo "エラー！：" . str2html($e->getMessage()) . "<br>";
    exit;
}
