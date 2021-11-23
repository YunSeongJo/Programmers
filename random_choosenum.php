<?php
    // 1부터 9까지 임의의 숫자 20개를 생성하고 숫자별로 몇 개가 생성되었는지 출력    
    // 생성된 숫자와 개수 모두 배열에 저장해 두고 출력할 것!   
    echo "list : ";
    $arr = array();
    for($i=0; $i<20; $i++)
    {
        $arr[$i] = rand(1, 9);
        echo "$arr[$i], "; 
    }
    echo "<br>";
    
    
    for ($i=0; $i <9; $i++) 
    {
        $cnt = 0; 
        for ($j=0; $j < count($arr); $j++) { 
            if($arr[$j] == ($i+1))
            {
                $cnt++;
            }
        }
        $count[] = $cnt;
        echo ($i+1)." 의 개수는 : ".$cnt."<br>";

    }
    
    
    echo "<hr>";
?>
    <table border=1>
    <tr>
        <th>num</th>
        <th>개수</th>
    </tr>
    <?php
    
    $rank = 1;
    for ($i=0; $i < 9; $i++) {
        echo "<tr>"; 
        echo "<td>".($i+1)."</td>";
        echo "<td>".$count[$i]."</td>";
        echo "</tr>";
    }
    ?>
   
</table>