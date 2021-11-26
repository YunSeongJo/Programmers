<?php 
    $count = 6;
   $random = array();

    for($i=0; $i<6; $i++)
    {
        $random[$i] = rand(1,45);
        for($j=0; $j<$i; $j++)
        {
            if($random[$i] == $random[$j])
            {
                $i--;
                break;
            }
        }

    }

    for($i =$count-2; $i >=0; $i--)
    {
        for($j =0; $j<=$i; $j++)
        {
            if($random[$j] > $random[$j+1])
            {
                $tmp = $random[$j];
                $random[$j] = $random[$j+1];
                $random[$j+1] = $tmp;
                
            }
            
        }
    }

    echo "버블 정렬(오름차순) 후 : ";
    for($a = 0 ; $a<$count; $a++)
    {
        echo $random[$a]." ";
    }
    echo "<br>";
?>

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
