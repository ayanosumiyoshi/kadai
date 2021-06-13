<html>
<head>
    <meta charset="utf-8">
    <title>アンケート結果</title>
</head>
<body>

<p>アンケート結果</p>

<?php 

$filex = fopen("data/data.csv","r");

$array = array(); //配列に入れておく

while($line = fgetcsv($filex)){
	$total_all += $line[3];
	$total_service += $line[4];
	$total_mood += $line[5];
	array_push($array,$line[0]);
}

$number = count($array); //要素の数を数える
$ave_all = $total_all/$number;
$ave_service = $total_service/$number;
$ave_mood = $total_mood/$number;

echo "＜平均値＞"."<br>";
echo "総合評価 : ".$ave_all."<br>";
echo "接客 : ".$ave_service."<br>";
echo "雰囲気 : ".$ave_mood."<br>";


fclose($filex);

?>

<table border="1" style="border-collapse: collapse">
<tr><th>日時</th><th>名前</th><th>メールアドレス</th><th>総合評価</th><th>接客</th><th>雰囲気</th><th>その他コメント</th></tr>
 
<?php
 
if( ($file = fopen("data/data.csv","r"))=== false ){
	die("CSVファイル読み込みエラー");
}
 
while (($array = fgetcsv($file)) !== FALSE) {
	
	//空行を取り除く
	if(!array_diff($array, array(''))){
		continue;
	}
	
	echo "<tr>";
	for($i = 0; $i < count($array); ++$i ){
		$elem = nl2br($array[$i]);
		$elem = $elem === "" ?  "&nbsp;" : $elem;
		echo("<td>".$elem."</td>");
	}
	echo "</tr>";
	
}

fclose($filex);

?>
 
</table>


<a href="index.php">TOP画面へ戻る</a>

</body>
</html>