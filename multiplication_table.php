<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body * {
            outline : 1px dashed red;
            font-family: Arial;
        }
       

        table {
            border-collapse: collapse;
            margin: 0 auto
        }

        table td {
          
            border: 1px solid red;
            padding: 18px;

            
        }


        table tr:nth-child(1){background-color: red; color:#fff}

        /* all odd except the first 1 */
        table tr:nth-child(2n+3){background-color: yellow;}
        
        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}


        .container {
            width: 1200px;
            margin: 30px auto;
            text-align:center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Multiplication Table using PHP</h1>
        <table> 
            <?php for($i=0; $i<10; $i++) { ?>
                
                <tr>
                    <!-- the row; left side -->
                    <td> <?= $i;?></td>
                    <?php 
                        if($i ==0){ ?>

                            <?php for($k = 1; $k <= 9; $k++){ ?>
                                <!-- the head -->
                                <td><?= $k; ?></td>

                            <?php } ?>
                    
                        
                    <?php }else { ?>

                        <?php for($j = 1; $j <10; $j++) {?>
                            <td><?=  $i * $j;?></td>
                            
                        <?php } ?>
                    <?php    
                        }
                    ?>
                </tr>
            <?php } ?>
        </table>
    </div>




    <!-- <table class="table">
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <tr class="red">
            <td>1</td>
            <td>1x1</td>
            <td>1x2</td>
            <td>1x3</td>
            <td>1x4</td>
            <td>1x5</td>
            <td>1x6</td>
            <td>1x7</td>
            <td>1x8</td>
            <td>1x9</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2x1</td>
            <td>2x2</td>
            <td>2x3</td>
            <td>2x4</td>
            <td>2x5</td>
            <td>2x6</td>
            <td>2x7</td>
            <td>2x8</td>
            <td>2x9</td>

        </tr>
        <tr>
            <td>3</td>
            <td>3x1</td>
            <td>3x2</td>
            <td>3x3</td>
            <td>3x4</td>
            <td>3x5</td>
            <td>3x6</td>
            <td>3x7</td>
            <td>3x8</td>
            <td>3x9</td>
        </tr>
    </table> -->
    


<!-- baseline -->
    <!-- <table class="table">
        <?php 
            for($i = 1; $i <= 9; $i++){
        ?>
            <tr>
                <td><?= $i; ?></td>
               <?php  for($j =1; $j <=9; $j++) { ?>
                    <?php 
                       
                    ?> 
                    <td><?= $i * $j;?></td>   
                <?php } ?>
            </tr>
        <?php } ?>
        
    </table> -->

    <br /> <br />
   

</body>
</html>