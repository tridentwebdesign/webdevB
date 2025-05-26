<?php
// result.php
// POSTで送信された値を受け取る
echo "<h1>受け取ったデータ</h1>";
echo $_POST["shimei"]."さん、こんにちは！";
echo "<br>";
//あなたの年齢は、◯◯歳ですね。
echo "あなたの年齢は、".$_POST["nenrei"]."歳ですね。";
echo "<br>";
var_dump($_POST);