<?php
    session_start();
    
    unset($_SESSION["username"]);
?>
<html><head><meta charset = "utf-8">
<link href = "../css/style.css" rel = "stylesheet">
</head>
<body>
    <h3> 등록된 세션의 사용</h3>
    <ul>
        <li><?= "userid 세션 : ".$_SESSION["userid"]."<br>" ?></li>
        <li><?= "username 세션 : ".$_SESSION["username"]."<br>" ?></li>
        <li><?= "username 세션이 삭제되었습니다! " ?></li>
    </ui>

</body></html>