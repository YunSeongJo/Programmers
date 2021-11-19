<?php
    $sum = 0;
    $i = 1;
    while($i<=10)
    {
        $sum = $sum + $i;
        echo "\$i : $i  -> 합계: $sum<br>";
        $i++;
    }
?>

<?php
    $sum = 0;
    $i = 100;
    while($i <=300)
    {
        if($i % 3 == 0)
            $sum = $sum + $i;
            $i++;
    }

    echo "100~300까지의 정수 중 3의 배수의 합 : $sum<br>";

?>

<?php
    $i = 1;
    $count = 0;
    while($i <=100)
    {
        if($i % 3 != 0)
        {
            echo "$i ";
            $count ++;
        }
        if($count % 10 ==0)
            echo "<br>";
        $i++;
    }
?>

<?php
    
    $inch = 10;
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th width = '100'>인치 </th><th width = '100'>센티미터</th>";
    echo "<tr>";

    while ($inch <= 100)
    {
        $cm = $inch *2.54;
        echo "<tr align = 'center'> <td>$inch</td><td>$cm</td></tr>";
        $inch = $inch + 10;
    }
    echo "</table><br>";

?>

<h3> 2단 구구단 표 만들기 </h3>
<table border = "1" width = "100">
<?php
    $a =2;
    $b = 1;
    while($b <=9)
    {
        $c = $a * $b;
        echo "<tr><td align = 'center'>$a x $b = $c</td></tr>";
        $b ++;
    }


?>
</table>

<?php

    $count = 0;
    $ok= true;
    for($i =500; $i<=700; $i++)
    {
        if($i % 4 != 0)
        {
            echo $i." ";
            $count ++;
            $ok = true;
        }
        if ($count != 0 && $count % 10 == 0 && $ok == true)
        {
            echo "<br>";
            $ok = false;
        }

    }
?>

<h3> 섭씨 -> 화씨 온도 변환 /<h3>
<table border = "1" width = "300">
<tr align = "center"><td width = "150">섭씨</td><td>화씨</td></tr>
<?php
    for ($c = -15; $c <=35; $c= $c+5)
    {
        $f = $c * 9/5+32;
        echo "<tr align = 'center'><td>$c</td><td>$f</td></tr>";
    }
?>
</table>

<style>
    table{border-collapse:collapse; width:600px;}
    td{border:solid 1px gray; text-align:center; padding:5px;}
</style>    
    <h3>- 구구단 표</h3>
    <table>
    <tr>
    <td>2단</td>
    <td>3단</td>
    <td>4단</td>
    <td>5단</td>
    <td>6단</td>
    <td>7단</td>
    <td>8단</td>
    <td>9단</td>
    
<?php
    
    for($b = 1; $b <=9; $b++)
    {
        echo "<tr>";
        for($a =2; $a <=9; $a++)
        {
            $c = $a * $b;
            echo ("<td>{$a} x {$b} = $c</td>");
        }
        echo ("/tr");
    }
?>
</table>

<?php
    for($a = 1; $a <= 10; $a++)
    {
        for($b = 9; $b >= $a; $b--)
        {
            echo "&nbsp;&nbsp;";
        }
        for($c = 1; $c <=$a; $c++)
        {
            echo "*";
        }
        echo "<br>";
    }
?>

<?php
    $i =1;
    $sum =0;
    do
    {
        $sum = $sum +$i;
        $i ++;

    } 
    while ($i <=10);
    echo "합계 : $sum";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>