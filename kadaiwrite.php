<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$rate = $_POST["rate"];
$taste = $_POST["taste"];
$mood = $_POST["mood"];
$comment = $_POST["comment"];


//文字作成(日付)
$time = date("Y-m-d H:i:s");
$str = $time . ',' . $name . ',' . $mail . ',' . $rate . ',' . $taste . ',' . $mood . ',' . $comment;

// .txt Fileにデータを保存する(Fileに書き込みをする)処理
$file = fopen("data/data.csv","a");//対象のファイルを開く、もしなければファイルを生成してくれる

fwrite($file, $str."\n");// ファイルにデータを書き込み。\nは改行の意味がある

fclose($file);//ファイルを閉じる

?>


<html>
<link rel="stylesheet" href="./css/style_kadaiwrite.css">
<head>
    <meta charset="utf-8">
    <title>アンケート登録</title>
</head>
<body>

<div class="titlepart text_center">
    <img src="img/starbucks.PNG" alt="starbuckslogo" width="150px">
    <p class="title">STARBUCKS MIL店</p>
</div>

<div class="text_center main_text">
<p>ご回答いただきありがとうございました</p>
<p>またのご利用をお待ちしております</p>
<a href="index.php">TOPページに戻る</a>
</div>

</body>

<footer class="footer text_center">
    <p>
        Copyright © 2021 Mitsubishi Innovation Lab All Rights Reserved.
    </p>

</footer>


</html>