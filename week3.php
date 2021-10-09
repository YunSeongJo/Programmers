<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Test</title>
</head>
<body>
    <form name=fo method= "POST" action = "week5_view.php">
        ID : <input type = text name = id><BR>
        PASS : <input type = password name =ps><br><br>
        <input type=submit value = "제출"> 
    </form>
    <form name = cal method = "POST" action= "week5_view.php">
    fist : <input type = text name = first value=14><br>
    second : <input type= text name = second value=63><br>
    <textarea row =5 col =20 name = "content"></textarea><br>
    <input type = radio name = gender value = "man"checked> 남성 <br>
    <input type = radio name = gender value = "woman"> 여성 <br>
    <input type = radio name = email value = "agree"> 수신
    <input type = radio name = email value = "disagree" checked> 비수신<br>
    <input type = "checkbox" name = "hobby[]" id="" value="climbing" checked>등산
    <input type = "checkbox" name = "hobby[]" id="" value="coding">코딩
    <input type = "checkbox" name = "hobby[]" id="" value="nap">잠자기
    <input type = "checkbox" name = "hobby[]" id="" value="netflix">넷플릭스보기
    <hr>
    이메일: <input type = text name = "email1" placeholder="id">@
    <select name = "email2" id="">
        <option value = "" selected>선택하기</option>
        <option value = "naver.com">네이버</option>
        <option value = "gmail.com">구글</option>
        <option value = "smu.ac.kr">상명</option>
    </select>
    <hr>
    <input type = "hidden" name = "userid" value = "admin">요기 히든이지롱
    <hr>
    <input type = submit value = "계산하기">
    
    </form>

</body>
</html>
