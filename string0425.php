<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index01.html">回首頁</a>
<br>
    <h2>字串處理-string</h2>
    
    <h4>字串取代</h4>
    <li>將”aaddw1123”改成”*********”</li>
    <h5>方法1</h5>
<?php
$s='aaddw1123';
$s=str_replace('a','*',$s);
echo $s;
echo "<br>";
$s=str_replace('d','*',$s);
echo $s;
echo "<br>";
$s=str_replace('w','*',$s);
echo $s;
echo "<br>";
$s=str_replace('1','*',$s);
echo $s;
echo "<br>";
$s=str_replace('2','*',$s);
echo $s;
echo "<br>";
$s=str_replace('3','*',$s);
echo $s;
echo "<br>";


echo "<hr>";

// -- 方法2 --

$s=str_replace(['a','d','w','1','2','3'],'*',$s);
echo $s;
echo "<br>";

echo "<hr>";
// 方法3
// 計算字串的長度
$s='aaddw1123';
$s=str_repeat("*",mb_strlen($s));
echo $s;

echo "<hr>";

?>

<h4>字串分割</h4>
    <li>將”this,is,a,book”依”,”切割後成為陣列</li>
<?php

$s='this,is,a,book';
$result=explode(",",$s);
echo "<pre>";
print_r($result);
echo "</pre>";

echo "<hr>";

?>
<h4>將上例陣列重新組合成“this is a book”</h4>

<?php

$result=join('',$result);
echo $result;

?>
<hr>
<h4>子字串取用</h4>
<li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
<?php
// 計算$s從string0到string10，的字串
$s='The reason why a great man is great is that he resolves to be a great man The reason…';
$new=mb_substr($s,0,10);
echo $new;
echo '...';
?>
<hr>
<?php
$s="（原本的目前迭代的元素值）存入陣列尾端往前數的位置，完成交換。";
$new=mb_substr($s,1,10);
echo $new;
echo '...';

?>
<hr>
<h4>尋找字串與HTML、css整合應用</h4>

<ul>
<li>給定一個句子，將指定的關鍵字放大</li>
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
<li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php
$s='學會PHP網頁程式設計，薪水會加倍，工作會好找';
$color='skyblue';
$size='38px';
$key='程式設計';
$s=str_replace($key,"<span style='color:$color;font-size:$size'>$key</span>",$s);

echo $s;

?>
<hr>
<h2>時間及日期處理</h2>
<h4>給定兩個日期，計算中間間隔天數</h4>
<?php
// 30天
$start="2024-1-10";
$end="2024-2-9";

echo '開始日:',$start;
echo "<br>";
echo '結束日:',$end;
echo "<br>";

echo "<hr>";
$start=strtotime($start);
$end=strtotime($end);

echo $start;
echo "<br>";
echo $end;
echo "<br>";

$diff=$end-$start;
echo $diff/(60*60*24);
?>

<hr>
<h4>計算距離自己下一次生日還有幾天</h4>
<?php
// 程式不要寫死不然就會改到死

echo "今年是".date("Y");
echo "<br>";
echo "今天是",date("Y年m月d日");
echo "<br>";
$birthday="1985-12-4";
$start=strtotime(date("Y-m-d"));
$tb=str_replace(mb_substr($birthday,0,4),date("Y"),$birthday);
if(strtotime($tb)<strtotime("now")){
    $tb=str_replace(mb_substr($birthday,0,4),(date("Y")+1),$birthday);
}
$end=strtotime($tb);
$diff=$end-$start;
echo floor($diff/(60*60*24));

?>

<hr>
<h4>利用date()函式的格式化參數，完成以下的日期格式呈現</h4>
<li>2024/04/25</li>
<li>04月25日 thursday</li>
<li>2024-04-25 12:9:5</li>
<li>2024-04-25 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
<?php
date_default_timezone_set("Asia/taipei");
echo date("Y/m/d");
echo "<br>";
echo date("m月/j日/ l");
echo "<br>";
echo date("Y-m-j H:i:s");
echo "<br>";
echo date("Y-m-j H:i:").(int)date("s");
echo "<br>";
$workday=(date("N")<6)?"工作日":"假日";
echo "今天是西元".date("Y年/m月/j日/ l")."是$workday";
echo "<br>";
?>

<hr>
<h4>利用迴圈來計算連續五個周一的日期</h4>
<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>
<?php

$date="2024-04-22";
$week=[
    1=>"星期一",
    2=>"星期二",
    3=>"星期三",
    4=>"星期四",
    5=>"星期五",
    6=>"星期六",
];
// chat gpt的做法

// for($i=0; $i<5; $i++){
//     $time=date("Y-m-d  l",strtotime("$date+ $i week"));  
//     echo $time;
//     echo "<br>";
// }

for($i=0; $i<5; $i++){
$day=strtotime("+$i week",strtotime($date));
date("N");
echo date("Y-m-d ",$day);
echo $week[date("N",$day)];
echo "<br>";
}

?>

<hr>
</body>
</html>