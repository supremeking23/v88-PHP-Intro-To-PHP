<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
<?php 
$name = "Mavis";
echo "Hello, $name! <br >"; ?>

<?php 
    echo "1" + "2";

    for($i = 0; $i < 10;$i++){
        echo "<br>row $i <br >";
        for ($j = 0; $j < 5 ;$j++){
            echo "column $j ";
        }

        echo " <br >";
    }


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

    echo "<br><br><br><br>";

    $exams = array(
        array(
         'title' => 'Yellow Belt Exam',
         'language' => 'HTML & CSS'
        ),
        array(
         'title' => 'Red Belt Exam',
         'language' => 'PHP using CodeIgniter'
        ),
        array(
         'title' => 'Black Belt Exam',
         'language' => 'Ruby using Ruby on Rails'
        )
    );

    foreach($exams as $exam) {
        echo "<p>" . $exam['title'] ."-". $exam['language'] . "</p>";
        // echo "<p> $exam['title'] - $exam['language'] </p>";
        // echo "<p> {$exam['title']} - {$exam['language']} </p>";
    }
    echo "<br><br><br><br>";
?>



<ul>
<?php
    for($i = 1; $i <= 5; $i++) {
        echo "<li>Blue car finished round $i! <ul>";
        for($k = 1; $k <= 2; $k++) {
        echo "<li> Driver just ran and finished round $k! </li>";
        }
        echo "</ul></li>";
    }

    function car_factory($raw_materials) {
        $cars = array();
        foreach($raw_materials as $raw_material) {
           $cars[] = "<p>Just produced a {$raw_material['paint']} car that used {$raw_material['metal']} for the body and {$raw_material['rubber']} for the car's tires. </p>";
        }    
        return $cars;
    }
    $raw_materials = array(
       array(
          'rubber' => 'Natural Rubber',
          'metal' => 'Alloy',
          'paint' => 'Green'
       ),
       array(
         'rubber' => 'Nitrile',
         'metal' => 'Brass',
         'paint' => 'Red'
       )
    );
    $cars = car_factory($raw_materials);
    var_dump($cars);

    
?>
</ul>

<?php 

    echo "<br><br><br><br>";

    function compute_average($array){
        $total = 0;
        foreach($array as $item){
            $total = $total + $item;
        }

        return $total / count($array);
    }

    $items = array(34,5,77,33,4,6);
    $average = compute_average($items);
    echo "average is $average";

    echo "intval" .intval("iiiikkkkk");

    define('A_WEEK', 7);
    $two_weeks = A_WEEK + A_WEEK;
    echo $two_weeks;
?>

</body>
</html>