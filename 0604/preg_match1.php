<?php
$str = "12345678";
$rtn = preg_match('/\d{7}/u', $str, $match);
$str2 = "1234567あ";
$rtn2 = preg_match('/\d{7}/u', $str2, $match2);
$str3 = "111-1234567";
$rtn3 = preg_match('/\d{7}/u', $str3, $match3);

echo "結果1<br>";
var_dump($match);
echo "<br>";
echo "結果1<br>";
var_dump($match2);
echo "<br>";
echo "結果1<br>";
var_dump($match3);
echo "<br>";
