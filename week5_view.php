<?php

    $id = $_POST["id"];
    $pass = $_POST["ps"];

    echo "id = ".$id."<br>";
    echo "pass = ".$pass."<br>";


    $a = $_POST["first"];
    $b = $_POST["second"];

    $c = $a + $b;
    echo "result = ".$c."<br>";

    $con = $_POST["content"];
    $gen = $_POST["gender"];
    $email = $_POST["email"];
    if ($email == "agree")
        $result = "이메일 수신에 동의하셨습니다.";
    else
        $result = "이메일 수신에 동의하지 않았습니다.";
        
    $hobby = $_POST["hobby"];
    $cnt = count($hobby);
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $full = $email1."@".$email2;
    $ad = $_POST["userid"];
?>
<p>
    <div> 입력된 글 : <?= $con ?> </div>
    <div> 성별 : <?= $gen ?> </div>
    <div> 이메일 수신 : <?= $result ?></div>
    <div> 취미 : 
    <?php
        for($i = 0; $i<$cnt; $i++)
            echo $hobby[$i]." ";
    ?>
    </div>
    <div> 이메일 주소 : <?= $full ?></div>
    <div> hidden para : <?= $ad ?></div>
</p>