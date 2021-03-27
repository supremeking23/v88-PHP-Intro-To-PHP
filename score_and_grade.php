<?php 
    function score_and_grade_generator(){
        $score = rand(50,100);
        $grade = "";
    
        switch($score){
            case $score < 70:
               $grade = "D";
               break;
            case $score >= 70 && $score < 80:
                $grade = "C";
                break;
            case $score >= 80 && $score < 90:
                $grade = "B";
                break; 
            case $score >= 90 && $score <= 100:
                $grade = "A";
                break;
        }
    
        return array($score => $grade);
        
    }

    for($i = 1; $i <= 100;$i++){
        $datas = score_and_grade_generator();
        foreach($datas as $score => $grade){
            echo "<h1>Your Score : $score/100</h1>";
            echo "<h2>Your Grade is $grade</h2>";
        }
    }


?>