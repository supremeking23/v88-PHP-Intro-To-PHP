<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table,  table td{
            border: 1px solid red;
            padding: 18px;
        }
    </style>
</head>
<body>
    <?php 
        $users = array( 
            array('first_name' => 'Michael', 'last_name' => 'Choi'),
            array('first_name' => 'John', 'last_name' => 'Supsupin'),
            array('first_name' => 'Mark', 'last_name' => 'Guillen'),
            array('first_name' => 'KB', 'last_name' => 'Tonel') 
        );

        $output ="";
        for($i = 0; $i < count($users);$i++){
            $id = $i + 1;
            $output .= "<tr>";
            $output .="<td> $id</td>";
            $output .="<td>{$users[$i]['first_name']}</td>";
            $output .="<td>{$users[$i]['last_name']}</td>";  
            $output .="<td>{$users[$i]['first_name']} {$users[$i]['last_name']}</td>";
            $output .="<td>".strtoupper($users[$i]['first_name'] ." ". $users[$i]['last_name'])."</td>";
            $output .="<td>".strlen(str_replace(" ","",$users[$i]['first_name'] ." ". $users[$i]['last_name']))."</td>";
            $output.= "<tr/>";
        }

        

    ?>
    <table>
        <tr>
            <th>User#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Full Name in upper case</th>
            <th>Length of full name (without spaces)</th>
        </tr>
        <?php 
            echo $output;
        ?>
    </table>

    <h2>Solution 2</h2>
    <table>
        <tr>
        <th>User#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Full Name in upper case</th>
            <th>Length of full name (without spaces)</th>
        </tr>
        <?php 
           for($i = 0; $i < count($users);$i++){ 
                $id = $i + 1;   
            ?>
        <tr>
            <td> <?= $id;?></td>
            <td> <?= $users[$i]['first_name'];?></td>
            <td> <?= $users[$i]['last_name'];?></td>
            <td> <?= $users[$i]['first_name'] ." ". $users[$i]['last_name'];?></td>
            <td> <?= strtoupper($users[$i]['first_name'] ." ". $users[$i]['last_name'])?></td>
            <td> <?= strlen(str_replace(" ","",$users[$i]['first_name'] ." ". $users[$i]['last_name']));?></td>
        </tr>
        <?php }
        ?>
    </table>
</body>
</html>