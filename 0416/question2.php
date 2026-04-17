<?php
# 変数 $first = "Hello" と $second = "World" を使って、1つの文字列に結合して出力してください。
# 変数 $name = "Taro" を使って、「こんにちは、Taroさん」 と表示されるように、文字列を結合して出力してください。
# 変数 $greeting = "こんにちは" に 「、元気ですか？」 を「.=」を使って追加し、結果を表示してください。
# 文字列 "PHP"、" is "、"fun!" をそれぞれ変数に入れて、すべて結合して出力するコードを書いてください。
# 変数 $text = "" を初期化し、"A", "B", "C" を順に .= で追加して出力してください。
?>
<?php
// 1. "Hello" と "World" を結合
$first = "Hello";
$second = "World";
echo $first . " " . $second . "\n";  // 結果: Hello World

// 2. 「こんにちは、Taroさん」
$name = "Taro";
echo "こんにちは、" . $name . "さん\n";  // 結果: こんにちは、Taroさん

// 3. 「.=」で文字列を追加
$greeting = "こんにちは";
$greeting .= "、元気ですか？";
echo $greeting . "\n";  // 結果: こんにちは、元気ですか？

// 4. "PHP", " is ", "fun!" を結合
$word1 = "PHP";
$word2 = " is ";
$word3 = "fun!";
echo $word1 . $word2 . $word3 . "\n";  // 結果: PHP is fun!

// 5. $text に "A", "B", "C" を .= で追加
$text = "";
$text .= "A";
$text .= "B";
$text .= "C";
echo $text . "\n";  // 結果: ABC
?>