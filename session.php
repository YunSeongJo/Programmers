<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션</title>
</head>
<body>
    <?php //세션 시작과 등록, 쿠키보다 보완성이 강함.
        SESSION_start();
        echo "세션 시작!!!<br>";

        $_SESSION['userid'] = "ocella";
        $_SESSION['username'] = "조윤성";
        echo "세션 등록 완료!!!<br>";

        echo $_SESSION['userid']."<br>";
        echo $_SESSION['username']."<br>";
    ?>
</body>
</html>


<?php //세션 사용
        //session_start(); 같은 php파일에서 해서 생략, 다른 php로 하면 해야됌.

        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>등록된 세션의 사용</h3>
    <ui>
        <li>등록된 세션(userid) : <?= $userid?></li>
        <li>등록된 세션(username) : <?= $username?></li>
        <br><br>
    </ui>
</body>
</html>

<?php // 세션 삭제!!!
    // session_start(); 이하생략
    unset($_SESSION["username"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ui>
        <li><?= "userid 세션 : ".$_SESSION["userid"]."<br>" ?></li>
        <li><?= "username 세션 : ".$_SESSION["username"]."<br>" ?></li>
        <li><?= "username 세션이 삭제되었습니다!" ?></li>
    </ui>
</body>
</html>