<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $states = array("CA","WA","VA","UT","AZ");

        $output ="";
        for($i = 0; $i < count($states); $i++){
            $output .= "<option value='$states[$i]'>$states[$i]</option>";
        }

        $output2 = "";
        foreach($states as $state){
            $output2 .= "<option value='$state'>$state</option>";
        }


        array_push($states,"NJ");
        array_push($states,"NY");
        array_push($states,"DE");
        $output3 = "";
        foreach($states as $state){
            $output3 .= "<option value='$state'>$state</option>";
        }
    ?>

    <h2>Using For loop</h2>
    <select name="dropdown-one" id="dropdown-one">
        <?php 
            echo $output;
        ?>
    </select>
    <br>

    <h2>Foreach loop</h2>
    <select name="dropdown-two" id="dropdown-two">
        <?php 
            echo $output2;
        ?>
    </select>
    <br>

    <h2>Addtional 3 states</h2>
    <select name="dropdown-three" id="dropdown-three">
        <?php 
            echo $output3;
        ?>
    </select>

</body>
</html>