<?php 

    $arrayItems = array(1,2,5,10,255,3);
    $sum = 0;
    for ($i = 0; $i < count($arrayItems); $i++)  {
        $sum = $sum + $arrayItems[$i] ;
    }
    $ave = $sum / count($arrayItems);
    echo $ave;
?>