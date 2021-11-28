<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_upload</title>
</head>
<body>
    <?php
        $file_dir = "C:/xampp/htdocs/exam_practice/picturefolder/";
        $file_path = $file_dir.$_FILES["upload"]["name"];
        if(move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path))
        {
            $img_path = "picturefolder/".$_FILES["upload"]["name"];
        
    ?>

    <ui>
        <li><img src = "<?= $img_path?>"></li>
        <li><?= $_POST["comment"]?></li>
    </ui>
    
    <?php
    }
    else{
        echo "파일 업로드 오류가 발생했습니다.!!";
    }
    ?>
</body>
</html>