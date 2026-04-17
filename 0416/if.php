<?php
// $condition = true;
$condition = false;
if ($condition) {
  echo '条件はtrueです。'.'<br>';
}

$a = 1;
if($a === 1){
  echo "aは1です。".'<br>';
}

$b = 1;
$c ="1";
if($b === 1){
  echo "aは数値型です。".'<br>';
}
if($c === "1"){
  echo "bは文字列型です。".'<br>';
}
if($b == $c){
  echo "aとbは等しい値です。".'<br>';
}