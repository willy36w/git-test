<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table{
        border-collapse: collapse;
    }
    td{
        border: 1px solid gray;
        padding:5px 10px;
    }
</style>
</head>
<body>
    <a href="index01.html">回首頁</a>
    
<h4>陣列array</h4>

<?php

$a=["A","B","C"];
$b=["name"=>"陳冠傑","hight"=>177];
$c=[["A","B","C"],["name"=>"陳冠傑","hight"=>177]];

print_r($a);
echo"<hr>";
print_r($b);
echo"<hr>";
print_r($c);

echo "<hr>";
echo serialize($a);
echo "<hr>";
echo serialize($b);
echo "<hr>";
echo serialize($c);

echo "<hr>";

$a=['A','B','C'];
// $tmp=implode(",",$a);
$tmp=join(",",$a);
echo $tmp;

echo "<hr>";
$b=explode(",",$tmp);
print_r($b);

// echo "<hr>";
// echo is_array($a);
?>

<hr>
<h3>利用程式來產生陣列</h3>
<ul>
    <li>以迴圈的方式產生一個99乘法表</li>
    <li>將99乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>
<?php
$ninenine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        // echo "$i x $j = ".($i*$j);
        $ninenine[]= "$i x $j = ".($i*$j);
    }

}

// 第一種語法
echo "<pre>";
print_r($ninenine);
echo "</pre>";

echo "<hr>";

// 第二種語法

$i=1;
foreach($ninenine as $nine){
    echo $nine;
    if($i%9==0){
        echo "<br>";
    }
  $i++;
}

echo "<hr>";
echo "<table>";
// 第三種語法(有表格)
foreach($ninenine as $idx => $nine){

    if($idx%9==0){
        echo "<tr>";
    }

    echo "<td> $nine </td>";

    if(($idx+1)%9==0){
        echo "</tr>";
    }
}

echo "</table>";
echo "陣列中有".count($ninenine)."個元素";

?>

<hr>

<h4>設計一個陣列(一維或多維)來存放學生的成績資料</h4>
<?php

$a=[
    ['國文'=>
    ['name'=>'judy',
    'score'=>'95'],
    ['name'=>'amo',
    'score'=>'88'],
    ['name'=>'john',
    'score'=>'45'],
    ['name'=>'peter',
    'score'=>'59'],
    ['name'=>'hebe',
    'score'=>'71']
],
['英文'=>
    ['name'=>'judy',
    'score'=>'64'],
    ['name'=>'amo',
    'score'=>'78'],
    ['name'=>'john',
    'score'=>'60'],
    ['name'=>'peter',
    'score'=>'32'],
    ['name'=>'hebe',
    'score'=>'62']
],
['數學'=>
    ['name'=>'judy',
    'score'=>'70'],
    ['name'=>'amo',
    'score'=>'54'],
    ['name'=>'john',
    'score'=>'68'],
    ['name'=>'peter',
    'score'=>'77'],
    ['name'=>'hebe',
    'score'=>'80']
],
['地理'=>
    ['name'=>'judy',
    'score'=>'90'],
    ['name'=>'amo',
    'score'=>'81'],
    ['name'=>'john',
    'score'=>'70'],
    ['name'=>'peter',
    'score'=>'54'],
    ['name'=>'hebe',
    'score'=>'62']
],
['歷史'=>
    ['name'=>'judy',
    'score'=>'84'],
    ['name'=>'amo',
    'score'=>'71'],
    ['name'=>'john',
    'score'=>'62'],
    ['name'=>'peter',
    'score'=>'42'],
    ['name'=>'hebe',
    'score'=>'64']
]
];
echo "<pre>";
print_r($a);
echo "</pre>";
?>

<hr>

<h4>威力彩電腦選號沒有重覆號碼(基本語法)</h4>

<?php
// 看chat gpt做的
$a=0;
$b=100;
$random_number = rand($a,$b);
echo "$random_number";


?>
<hr>
<h4>這是for迴圈的語法(不重複號碼)</h4>
<?php
// 老師教的 
// 1.亂數產生數字 2.迴圈產生6個1-38數字 3.比較數字 
// 4.陣列存取數字(存取比較後的數字)

$lotto=[];
for($i=0;$i<6;$i++){
    if($i==0){
        $lotto[]=rand(1,38);
    }else{
        $tmp=rand(1,38);
        foreach($lotto as $num){
            if($tmp!=$num){
             $lotto[]=$tmp;
            }
        }

    }
}
echo join(",",$lotto);

?>
<h4>這是while迴圈的語法(不重複號碼)</h4>
<?php

$lotto=[];
while(count($lotto)<6){
    $tmp=rand(1,38);
    if(!in_array($tmp,$lotto)){
      $lotto[]=$tmp;
    }
}
echo join(",",$lotto);

?>

<hr>

<h4>找出五百年內的閏年</h4>

<?php
// $year=[];
// while(count($year)<500){
//    $tmp=rand(1,500);
// }
$leaps=[];
$year=2024;
for($i=$year;$i<($year+500);$i++){

    if($i%4 == 0 && $i%100!=0 || $i%400==0){
        $leaps[]=$i;  
   }
}
echo "<h3>自$year 至".($year+500)."止，有以下閏年 : <h3>";
foreach($leaps as $leap){
echo $leap;
echo "<br>";

}
echo "<hr>";
echo "共有".count($leaps)."個閏年";

?>

<hr>

<h4>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h4>

<?php
$sky=[ 4=>'甲', 5=>'乙', 6=>'丙', 7=>'丁', 8=>'戊', 9=>'己', 0=>'庚', 1=>'辛', 2=>'壬', 3=>'癸' ];										
$land=[4=>'子',5=>'丑',6=>'寅',7=>'卯',8=>'辰',9=>'巳',10=>'午',11=>'未',0=>'申',1=>'酉',2=>'戌',3=>'亥',];
$year=1985;

echo"西元年".$year;

$t1=$sky[$year%10];
$t2=$land[$year%12];

echo "為 $t1 $t2 年";

?>

<hr>
<h4>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h4>

<li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>
<br>
    <?php

$a=[2,4,6,1,8,];

echo "原陣列為:[".join(',',$a)."]<br>";

for($i=0;$i<ceil(count($a)/2);$i++){
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;
}

echo "交換後為:[".join(',',$a)."]<br>";

echo "交換後為:[".join(',',array_reverse($a))."]<br>";

?>

</body>
</html>