<?php 

    // understanding foreach
    $x = array(1,3,5,7);
    foreach($x as $key => $value)
    {
        echo $key . " - " . $value ."<br />";
    }
    echo "\n\n";
    $x = array(1,3,5,7);
    foreach($x as $value)
    {
        echo $value ."<br />";
    }

    echo "\n\n";
    $x = array("hi" => "Dojo", "awesome" => "game");
    foreach($x as $key => $value)
    {
        echo $key . " - " . $value ."<br />";
    }

    echo "\n\n";

    $x = array("hi" => "Dojo", "awesome" => "game");
    foreach($x as $key => $value)
    {
        echo $value ."<br />";
    }

    echo "\n\n";
    $x = array("hi" => "Dojo", "awesome" => "game");
    foreach($x as $key => $value)
    {
        echo $key ."<br />";
    }

    echo "\n\n";


    $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
    foreach($x as $key => $value)
    {
        echo "Key is {$key}<br />";
        echo "var_dumping value";
        var_dump($value);
    }

    echo "\n\n";

    $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
    foreach($x as $value)
    {
        echo "var_dumping value";
        var_dump($value);
    }

    echo "\n\n";

    $x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
    foreach($x as $key => $value)
    {
        echo "key is {$key}<br />";
        foreach($value as $key2=>$value2)
        {
            echo $key2 ." - " . $value2."<br />";
        }
    }

    echo "\n\n";

    $copyx = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
    foreach($x as $y)
    {
        foreach($y as $key=>$value)
        {
            echo $key ." - " . $value."<br />";
        }
    }

?>