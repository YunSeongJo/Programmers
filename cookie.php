<?php // 쿠키 생성
    $a = setcookie("userid", "xoxoxoxoy");
    $b = setcookie("username", "조윤성", time()+120);

    if($a && $b)
    {
        echo "쿠키 'userid'와 'username' 생성 완료!<br>";
        echo "쿠키 'username'은 120초(2분)간 지속됨!!<br>";
    }
?>

<?php //쿠키 사용
    if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"]))
    {
        $userid = $_COOKIE["userid"];
        $username = $_COOKIE["username"];

        echo "userid 쿠키: " . $userid."<br>";
        echo "username 쿠키 : ".$username."<br>";
    }
    else
        echo "쿠키가 생성되지 않았다!<br>";  
?>

<?php // 쿠키 삭제
    setcookie("userid", "", time()-3600);
    setcookie("username", "", time()-3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키</title>
</head>
<body>
    <?php
        echo "userid와 username 쿠키가 삭제되었다!";
    ?>
</body>
</html>