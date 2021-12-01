<?php 
    // 전체 동작에 맞는 코드를 작성하시오.
    // action=3_4.php로 전달되는 경우 이미지 크기는 지정한 크기로 출력
    // action=3_4.php?scale=2로 전달되는 경우 이미지 크기는 2배 확대하여 출력
    // scale 값에 따라 크기가 배수로 변해야 함

    $picture = $_POST["picture"];
    $width = $_POST["width"];
    $height = $_POST["height"];

    if($picture == "mandu")
    {
        echo "이미지 이름 : mandu.jpg<br>";
        echo "이미지 크기 : ".$width."X".$height."<hr>";
        $filename = 'C:/xampp/htdocs/exam_practice/expicture/mandu.jpg';
        echo "<img src = '$filename' width = $width height = $height>";
    }
    else
    {
        echo "이미지 이름 :  download.jpg<br>";
        echo "이미지 크기 : ".$width."X".$height."<hr>";
        $filename = 'C:/xampp/htdocs/exam_practice/expicture/download.jpg';
        echo "<img src = '$filename' width = $width height = $height>";
    }
?>