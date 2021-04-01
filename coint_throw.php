<?php 

    // function throw_coin(){
    //    $result = array("heads" => 0, "tails" => 0);
    //    $coin = rand(0,1);
    //    if($coin == 0){
    //     $result["heads"] =+ 1;
    //    }else{
    //     $result["tails"] =+ 1;
    //    }
    // //    use this one later
    // }

    echo "<h1>Starting the Program</h1>";
    // $heads = 0;
    // $tails = 0;
    $result = array("heads" => 0, "tails" => 0);
    for($i = 1; $i <= 5000; $i++){        
        $coin = rand(0,1);
        if($coin == 0){
            // $heads = $heads + 1;
            $result["heads"] = $result["heads"] + 1;
        }else{
            // $tails = $tails + 1;
            $result["tails"] = $result["tails"] + 1;
        }
        echo "Attempt #$i Throwing a coin .. It's a head!.. Got {$result['heads']} head(s) so far and {$result['tails']} (s) so far <br>";
    }

    echo "<h2>Ending the program - thank you!</h2>";
?>