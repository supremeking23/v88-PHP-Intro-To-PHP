<?php 
// $A = array(2,4,10,16);
// function multipy($array){
//     $newArr = array();
//     foreach($array as $arrItem){
//         array_push($newArr,$arrItem * 5);
//     }
//     return $newArr;
// }

// $B = multipy($A);
// var_dump($B);

echo "<h1>Modify the function</h1>";
$A = array(2,4,10,16);

function multipy($array,$factor){
    $newArr = array();
    foreach($array as $arrItem){
        array_push($newArr,$arrItem * $factor);
    }
    return $newArr;
}

$B = multipy($A,2);
var_dump($B);

?>