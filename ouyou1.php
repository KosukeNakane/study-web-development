<?php
// 今日の日付
$start = strtotime("today");
for ($i = 0; $i < 365; $i++) {
    // $i日後の日付を取得
    $date = strtotime("+$i day", $start);
    echo date("n/j(D)", $date),", ";
}
?>