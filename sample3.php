<?php
   $value = 100 * 2 + 1000 * 1 + 2 * 200;
   $a = "税抜き：{$value}<br>";
   $b = "税込み：" . ($value * 1.1) . "<br>";
?>

<?php
$data = [
    ["購入商品", "個数", "料金"],
    ["りんご", "2", "100円"],
    ["お肉", "1", "1000円"],
    ["卵", "2", "200円"],
    ["合計", $a, $b]
];

echo "<table border='1' cellpadding='5'>";

foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>{$cell}</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>