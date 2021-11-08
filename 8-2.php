<?php
    if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"]))#isset = 변수값이 설정되어있는지 판단 설정되어있으면 참 아니면 거짓반환
    {
        $userid = $_COOKIE["userid"];
        $username = $_COOKIE["username"];

        echo "userid 쿠키: " . $userid."<br>";
        echo "username 쿠키: " . $username."<br>";

    }
    else
    {
        echo "쿠키가 생성되지 않았다!";
    }


?>