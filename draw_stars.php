<?php

    function draw_stars($array){
        for($i = 0; $i <= count($array) - 1; $i++){
            for($j = 1; $j <= $array[$i]; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }

    $x = array(4,6,1,3,5,7,25);

    draw_stars($x);

    echo "<br > <br >";

    function draw_stars2($array){
        for($i = 0; $i <= count($array) - 1; $i++){

            if(is_numeric($array[$i])){
                for($j = 1; $j <= $array[$i]; $j++){
                    echo "*";
                }
            }else{
                $string = $array[$i];
                $string_length = strlen($array[$i]);
                for($k =0; $k <= $string_length -1; $k++){
                    echo strtolower($string[0]);
                }
            }

               
            echo "<br>";
        }
    }

    $xx = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

    draw_stars2($xx);



?>