<?php 
    // $users['first_name'] = "Michael";
    // $users['last_name'] = "Choi";

    $users = array('firsy_name' => "Michael", 'last_name' => "Choi");

    function print_output($users){
        echo "There are " . count($users) . " keys in this array: <br />";
        foreach($users as $key => $value){
            echo "$key <br>";
        }

        foreach($users as $key => $value){
            echo "The value in the key '$key' is '$value'<br>";
        }


        
    }

    print_output($users);


?>
