<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table{
        border-collapse: collapse;
    }
    td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid table{
        border-collapse: collapse;
    }
    #grid td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid tr:nth-child(1) td,
    #grid td:nth-child(1){
        background:black;
        color:#CCC;
    }

</style>
<body>
<a href="index01.html">回首頁</a><br>
<h3>九九乘法表程式碼長版</h3>
<?php



for ($i=1; $i <= 9; $i++){
   echo "1 x " . $i . " = " . ($i*1) . "<br>";
}

echo "<br>";

 for ($i=1; $i <= 9; $i++){
   echo "2 x " . $i . " = " . ($i*2) . "<br>";
}

echo "<br>";

 for ($i=1; $i <= 9; $i++){
   echo "3 x " . $i . " = " . ($i*3) . "<br>";
}

?>

<hr>

<h3>九九乘法表程式碼(縮短版)</h3>
<?php
// echo $i . " x " . $j . " = " . ($i*$j) . "<br>";
// 呼應$i(1到9)加上文字串 x 呼應$j(1到9)加上文字串 = 呼應($i*$j)分段
for ($i=1 ;$i <=9; $i++){
   for($j=1 ;$j <=9; $j++){
   echo $i . " x " . $j . " = " . ($i*$j);
   echo " ";
   }
   echo "<br>";
   
}

?>
<h3>九九乘法表程式碼(表格版)</h3>

<?php
   echo "<table>";
for ($i=1 ;$i <=9; $i++){
   echo "<tr>";
   for($j=1 ;$j <=9; $j++){
   echo "<td>" . $i . " x " . $j . " = " . ($i*$j) . "</td>";
   echo " ";
   }
   echo "</tr>";
   
}
?>


<h3>交叉計算九九乘法表程式碼(表格版)</h3>

<?php
echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo " ";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j * $i);
        }
        /* if($i*$j!=0){
            echo $i*$j;
        }else if($j==0 && $i!=0){
            echo $i;
        }else if($j!=0 && $i==0){
            echo $j;
        }else{
            echo " ";
        } */
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
?>



<h3>交叉計算九九乘法表程式碼(進階表格版)</h3>

<?php

echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo " ";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else if($i>$j){
            echo "";
        }else{
            echo ($j * $i);
        }
        /* if($i*$j!=0){
            echo $i*$j;
        }else if($j==0 && $i!=0){
            echo $i;
        }else if($j!=0 && $i==0){
            echo $j;
        }else{
            echo " ";
        } */
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
?>

<h3>尋找字元(使用while)--困難</h3>

<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
</ul>

<p>403花蓮地震給台灣的新課題：海底斷層研究做好，預警、防災腳步才能跟上</p>
<!-- // 取出部分字串?ans:substr()
// 如何計算字串長度?ans:mb_strlen()、mb_substr() -->
<?php
$str="403花蓮地震給台灣的新課題：海底斷層研究做好，預警、防災腳步才能跟上";
$target="研究";
$position=0;

while($target!=mb_substr($str,$position,mb_strlen($target))){
  echo"p=".$position;
  echo", substr = ".mb_substr($str,$position,mb_strlen($target));
  echo"<br>";
$position=$position+1;
}
echo $target."的位置在".$position;
echo "<br>";
echo "函數顯示的位置在" . mb_strpos($str,$target);

?>
<?php
for($i=4;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo"<br>";
}
?> 
</body>
</html>