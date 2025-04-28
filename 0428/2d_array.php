<?php
// 2次元配列の作成
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// 配列の内容を表示
echo "<h3>2次元配列（行列）の例：</h3>";
echo "<pre>";
print_r($matrix);
echo "</pre>";

// 特定の要素にアクセス
echo "<h3>特定の要素へのアクセス：</h3>";
echo "matrix[0][0] = " . $matrix[0][0] . "<br>"; // 1
echo "matrix[1][1] = " . $matrix[1][1] . "<br>"; // 5
echo "matrix[2][2] = " . $matrix[2][2] . "<br>"; // 9

// forループを使用して2次元配列を反復処理
echo "<h3>forループでの反復処理：</h3>";
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "matrix[$i][$j] = " . $matrix[$i][$j] . "<br>";
    }
}

// foreachループを使用して2次元配列を反復処理
echo "<h3>foreachループでの反復処理：</h3>";
foreach ($matrix as $row_key => $row) {
    foreach ($row as $col_key => $value) {
        echo "matrix[$row_key][$col_key] = $value<br>";
    }
}

// 別の2次元配列の例（学生の成績）
$students = [
    '佐藤' => ['数学' => 85, '国語' => 90, '英語' => 78],
    '田中' => ['数学' => 92, '国語' => 88, '英語' => 95],
    '鈴木' => ['数学' => 78, '国語' => 85, '英語' => 80]
];

echo "<h3>学生の成績（連想配列）：</h3>";
echo "<pre>";
print_r($students);
