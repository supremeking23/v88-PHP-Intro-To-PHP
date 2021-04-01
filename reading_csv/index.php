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
    //  $file_data = fopen("tesmp.csv", 'r');
    //  $column = fgetcsv($file_data);
    //  while($row = fgetcsv($file_data))
    //  {
    //   $row_data = array(
    //    'column_name'  => $row[0],
    //    'column_name'  => $row[1]
    //   );
    //  }
    //  $output = array(
    //   'column'  => $column,
    //   'row_data'  => $row_data
    //  );
    

    // // var_dump($output );

    // // echo json_encode($output);

    // echo $column[1];
?>

    <?php 
        // this tells your script to automatically detect when the CSV file breaks a line
        ini_set('auto_detect_line_endings', true);
        $file = fopen("us-500.csv","r");    
        $row = 1;
        if($file !==FALSE){
            $column = fgetcsv($file); //removes first row .... the header
            while(($data =fgetcsv($file)) !== FALSE){
                $number_of_datas = count($data);
        ?>
                <h1>Record <?= $row;?></h1>
                <ul>
                <?php 
                    for($i = 0; $i < $number_of_datas; $i++){ ?>
                        <li><?= ucwords(str_replace("_"," ",$column[$i]))  ?> : <?= $data[$i]; ?></li>
                <?php   }?>
                </ul>
                
        <?php 
                $row++;    
            }
        }
    


        fclose($file);        
    ?>
</body>
</html>