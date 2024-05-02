<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index01.html">回首頁</a>
    <h2>For 迴圈</h2>
    <?php
    // $i=$i+1;
for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}

echo "<br>";
echo $i;

?>

<h2>while 迴圈</h2>
<?php
$score=10;
echo "原始成績=".$score;
while($score<60){
    $score=$score+10;
}
echo "<br>";
echo "調整結果","=".$score;
?>

<h2>巢狀結構</h2>

<?php
$show=false;

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
if($i>5 && $show==false){
    echo "<br>";
    echo "執行一半了...";
    $show=true;
}
    echo "<br>";
}

// if中只放變數的應用
$a=12;
if($a){
    echo "TRUE;";
}else{
    echo "FALSE";
}

?>

</body>
</html>