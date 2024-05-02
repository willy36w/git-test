<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index01.html">回首頁</a>
    <h3>回家練習題，正三角形挖空、菱形挖空、矩形劃十字變成田</h3>
    <h3>印迴圈星星</h3>
<h4>矩形</h4>
    <?php

for($i=0;$i<7;$i++){
        
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }else if($j==0 || $j==6){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";

}
?>
<hr>

<h4>矩形x</h4>

<?php

for($i=0;$i<7;$i++){
        
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6){
            echo "*";
        }else if($j==0 || $j==6 || $j==$i || $j==(6-$i)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";

}

?>

</body>
</html>