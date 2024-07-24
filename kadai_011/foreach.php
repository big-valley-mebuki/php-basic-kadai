<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <?php
    $vegetable_data=['名前' => '玉ねぎ','値段' => '200','産地' => '北海道'];

    //連想配列$vegetable_dataのキーと値を1つずつ順番に出力する
    foreach ($vegetable_data as $key => $value){
        echo "{$key}:{$value} <br>";
    }
    ?>

    
</body>
</html>