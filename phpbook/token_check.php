<?php
//var_dump($_POST['token']);
//var_dump($_SESSION['token']);

if (!isset($_SESSION)) {
    session_start();
}
if (empty($_POST['token'])) {
    echo "エラーが発生しました。";
    exit;
}
if (!(hash_equals($_SESSION['token'], $_POST['token']))) {
    echo "エラーが発生しました。";
    exit;
}
