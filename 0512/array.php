<?php
$players = [
    [
        'rank' => 1,
        'name' => '山本',
        'team' => 'ドジャース',
        'era' => 1.80
    ],
    [
        'rank' => 2,
        'name' => 'ルサルド',
        'team' => 'フィリーズ',
        'era' => 2.11
    ],
    [
        'rank' => 3,
        'name' => 'ペラルタ',
        'team' => 'ブリュワーズ',
        'era' => 2.18
    ],
    [
        'rank' => 4,
        'name' => 'キング',
        'team' => 'パドレス',
        'era' => 2.22
    ],
    [
        'rank' => 5,
        'name' => 'キャニング',
        'team' => 'メッツ',
        'era' => 2.357
    ]
];

//foreach文を使って選手の名前を表示させたい
foreach ($players as $player) {
    echo $player['name'] . "\n";
}
//ひとつひとつ取り出して処理を行うためのループ構文
//foreach文を使って防御率が2.2以下の選手を表示させたい
//$playersの要素の数だけループします。
//asのあとの$playerは、$playersの要素を一つずつ取り出してくるための変数名です。
foreach ($players as $player) {
    if ($player['era'] <= 2.2) {
        echo $player['name'] . "\n";
    }
}
//何回ループしていますか？
//foreach文は配列の要素を一つずつ取り出して処理を行うためのループ構文です。


//サンリオのキャラクターで2次元配列を作成してください

$characters = [
    [
        'name' => 'ハローキティ',
        'age' => 5,
        'team' => 'サンリオ'  
    ],
    [
        'name' => 'マイメロディ',
        'age' => 6,
        'team' => 'サンリオ'
    ],
    [
        'name' => 'シナモロール',
        'age' => 7,
        'team' => 'サンリオ'
    ],
    [
        'name' => 'ポムポムプリン',
        'age' => 8,
        'team' => 'サンリオ'
    ],
    [
        'name' => 'ぐでたま',
        'age' => 9,
        'team' => 'サンリオ'
    ]
];

//foreach文を使ってキャラクターの年齢を表示させたい
foreach ($characters as $character) {
    echo $character['age'] . "\n";
}
//foreach文を使ってキャラクターの名前を表示させたい
foreach ($characters as $character) {
    foreach ($character as $key => $value) {
        if ($key == 'name') {
            echo $value . "\n";
        }
    }
}