<?php
# add.php
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
require_once __DIR__ . '/token_check.php';
include __DIR__ . '/inc/header.php';



try {
    $dbh = db_open();
    $sql = 'INSERT INTO books (id, title, isbn, price, publish, author) VALUES (NULL, :title, :isbn, :price, :publish, :author)';
    $stmt = $dbh->prepare($sql);

    // var_dump($stmt);

    $price = (int) $_POST['price'];
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':publish', $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(':author', $_POST['author'], PDO::PARAM_STR);

    $stmt->execute();
    echo "データが追加されました。<br>";
    echo "<a href='index.php'>リストへ戻る</a>";
} catch (PDOException $e) {
    //例外をcatchしてエラーメッセージを表示
    //XSS対策のためにエスケープ
    echo '接続失敗: ' . str2html($e->getMessage()) . "<br>";
    exit;
}

include __DIR__ . '/inc/footer.php';
// $_POSTは、フォームから送信されたデータを格納する連想配列
//var_dump($_POST);
