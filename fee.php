<?php
    function cal_fee1($day, $age)
    {
        if($day == "주간")
        {
            if($age>12 && $age<65)
            {
                $money = 26000;
            }
            else
                $money = 19000;
        }
        else
        {
            if($age>12 && $age<65)
            {
                $money = 21000;
            }
            else
                $money = 16000;
        }
        return $money;
    }

    function cal_fee2($day, $age)
    {
        if($day == "주간")
        {
            if($age >12 && $age<65)
            {
                $money = 33000;
            }
            else
            {
                if($age > 12 && $age<65)
                    $money = 28000;
                else
                    $money = 21000;
            }
        }
        return $money;
    }

    function cal_fee3($age)
    {
        if($age>12 && $age<65)
        {
            $money = 54000;
        }
        else
            $money = 40000;
        return $money;
    }

    function cal_fee4($age)
    {
        if($age>12 && $age<65)
        {
            $money = 54000;
        }
        else
            $money = 40000;
        return $money;
    }

    $category = 2;
    $age = 15;
    $day = "주간";

    if($category == 1)
        $fee = cal_fee1($day, $age);
    elseif($category == 2)
        $fee = cal_fee2($day, $age);
    elseif($category == 3)
        $fee = cal_fee3($age);
    else
        $fee = cal_fee4($age);
    

    if($category == 1)
    {
        $cat = "일반 이용권";
    }
    elseif($category == 2)
    {
        $cat = "자유 이용권";
    }
    elseif($category == 3)
    {
        $cat = "2일 자유 이용권";
    }
    else
        $cat = "콤비권";
    

    echo "- 구분 : $cat<br>";
    if($category == 1 || $category ==2)
    {
        echo "-주야간 : $day<br>";
    }

    echo "- 나이 : $age 세<br>";
    echo "- 입장료 : $fee 원";
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>입장료 표</title>
 </head>
 <body>
    <h3>입장료 표</h3>
    <style>
        table {border-collapse : collapse width = 1000px;}
        th {border:solid 1px gray; text-align:center;padding:5px;}
        td {border:solid 1px gray; text-align:center;padding:5px;}
    </style>
    <table>
        <tr align= 'center' bgcolor = 'pink'><th colspan = '2'>구분</th><th>대인</th><th>소인</th></tr>
        <tr><td rowspan = '2'>일반 입장권</td><td>주간</td><td>26000원</td><td>19000원</td></tr>
        <tr><td>야간</td><td>21000원</td><td>16000원</td></tr>
        <tr><td rowspan = '2'>자유 이용권</td><td>주간</td><td>33000원</td><td>24000원</td></tr>
        <tr><td>야간</td><td>28000원</td><td>21000원</td></tr>
        <tr><td colspan='2'>2일 자유 이용권</td><td>55000원</td><td>40000원</td></tr>
        <tr><td colspan='2'>콤비권</td><td>54000원</td><td>40000원</td></tr>
</table>
 </body>
 </html>   