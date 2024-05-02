<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index01.html">回首頁</a>
<h3>給定一個成績數字，判斷是否及格(60分)</h3>
<?php
$score=50;
echo "成績為".$score."分";
echo "<br>";


$result='';
if($score>=60){
    $result="及格";
}else{
    $result="不及格";
}

echo "判斷為".$result;

?>

<h2>分配成績等級</h2>

<h2>給定一個成績數字，根據成績所在的區間，給定等級</h2>
<ul>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>

<?php

$level='';

if($score>= 90 && $score <=100){
    $level="A";
}else if($score>= 80){
    $level="B";
}else if($score>= 70){
    $level="C";
}else if($score>= 60){
    $level="D";
}else if($score>= 0){
    $level="E";
}else{
    $level="成績必須在0~100之間，請重新輸入";
}
   
echo "等級判定為".$level;

?>


<?php

$words='';
switch($level){
    case 'A':
        $words="表現優異，值得肯定!";
    break;
    case 'B':
        $words="表現不錯，加油!";
    break;
    case 'C':
        $words="有點退步喔，加油!";
    break;
    case 'D':
        $words="加油，加油!";
    break;
    case 'E':
        $words="你辦的到，加油!";
    break;
}
echo "<br>";
// if($level == 'A' || $level == 'B' || $level == 'C' $level == 'D'){
//     echo "<span style='font-size:32px;color:blue>";
// }else{
//     echo "<span style='font-size:32px;color:yellow>";
// }
echo "<span style='font-size:32px;color:red'>";
echo $words;
echo "</span>";
?>


<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>

<style>
.desc{
    width:500px;
    padding:10px;
    background:lightsalmon;
    color:darkmagenta;
    border:1px soild #666;
}
</style>

<div class="desc">地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。
</div>
<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>


<?php

$year=2000;

echo "年份為".$year;
echo "<br>";

if($year%4 == 0){

  if($year%100==0){

     if($year%400==0){

       echo $year . "是閏年";

    }else{

       echo $year . "是平年";
    }

 }else{
    echo $year . "是閏年";
}
   
}else{
 echo $year . "是平年";
}

?>

<h2>簡單迴圈練習</h2>

<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>


<?php



?>

</body>
</html>