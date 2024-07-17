<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テストの平均点</title>
</head>
<body>
<?php
//変数に値を代入する
$score1=80;
$score2=60;
$score3=55;
$score4=40;
$score5=100;
$score6=25;
$score7=80;
$score8=95;
$score9=30;
$score10=60;

//変数を合計する
$score_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

//変数から平均点を出し、出力する
$score_average = $score_total / 10;
echo $score_average;
?>

    
</body>
</html>