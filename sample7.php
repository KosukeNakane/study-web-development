<?php
$fruits = [
    "apple" => "りんご",
    "lemon" => "レモン",
    "grape" => "ぶどう",
    "tomato" => "トマト"
];

foreach ($fruits as $english => $japanese) {
    echo "英語: {$english}<br>";
    echo "日本語: {$japanese}<br>";
}
?>