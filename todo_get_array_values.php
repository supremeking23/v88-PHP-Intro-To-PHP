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
    function print_list($array){
        $output = "";
        foreach($array as $list){
        $output .="<li>$list</li>";
        }

        return $output;
    }

    $A = array(2,3,"hello");

    $list_items = print_list($A);
?>

    <ul>
        <?php echo $list_items;?>
    </ul>
</body>
</html>