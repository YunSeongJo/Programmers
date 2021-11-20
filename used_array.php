<?php
    $score = array(array(88,98,96,77,63),array(86,77,66,86,93),array(74,83,95,86,97));
    $up_point = array();
    $point= array();
    $student_num2 = array();
    

    for($i = 0; $i<3; $i++)
    {
        $sum = 0;
        for($j = 0; $j<5; $j++)
        {
            $sum = $sum+$score[$i][$j];
        }
        $avg = $sum/5;
        $student_num = $i +1;
        
        array_push($up_point,$avg);
        array_push($student_num2,$student_num);
        array_push($point,$avg);
        
    }
    $ct = count($up_point);
    for($i = 0; $i < $ct; $i++)
    {
        for($j = 0; $j<$ct-1-$i; $j++)
        {
            if($up_point[$j] > $up_point[$j+1])
            {
                $tmp = $up_point[$j];
                $up_point[$j] = $up_point[$j+1];
                $up_point[$j+1] = $tmp;
            }
        }
        if($up_point[2]==$point[$i])
        {
            echo "<br>최고점 학생번호는 : ".$student_num2[$i];

        }
    }
    
    
    
    echo "<hr>"; 

    //과목별 성적 합계와 평균

    $subject = array();
    $subject_up= array();
    $subject_num = array();
    for($i = 0; $i<5; $i++)
    {
        $sum = 0;
        for($j = 0; $j<3; $j++)
        {
            $sum = $sum+$score[$j][$i];
        }
        $avg = $sum/3;
        $lecture_num = $i +1;
       
        array_push($subject,$avg);
        array_push($subject_up,$avg);
        array_push($subject_num,$lecture_num);
    }
    $ct = count($subject_up);
    for($i = 0; $i < $ct; $i++)
    {
        for($j = 0; $j<$ct-1-$i; $j++)
        {
            if($subject_up[$j] > $subject_up[$j+1])
            {
                $tmp = $subject_up[$j];
                $subject_up[$j] = $subject_up[$j+1];
                $subject_up[$j+1] = $tmp;
            }
        }
        if($subject_up[2]==$subject[$i])
        {
            echo "<br>최고점 과목번호는 : $subject_num[$i]";

        }
    }
        
    

    
?>

