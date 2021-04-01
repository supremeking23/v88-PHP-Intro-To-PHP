<?php 
function get_max_and_min($array){
    $max = 0;
    $min = $array[0];
    foreach($array as $find_max){
        
        if($find_max > $max){
            $max = $find_max;
        }
    }

    for($i = 0; $i <= count($array) - 1; $i++){
        if($array[$i] < $min){
            $min = $array[$i];
        }
    }

    return array("max" => $max, "min" => $min);

}
$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$output = get_max_and_min($sample); 
var_dump($output);
?>