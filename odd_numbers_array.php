<?php
    $array_odd = array();
    for($i = 0; $i <= 20000; $i++) {
        if(!($i % 2 == 0)){
            array_push($array_odd,$i);
        }
    }

    var_dump($array_odd);
?>