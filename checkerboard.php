<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>

    <style>
        * {
            padding:0;
            margin:0;
        }
        .column{
            display:inline-block;
            width:60px;
            height:60px;
            vertical-align:;
            /* border:1px solid red; */
        }
        .row {
            /* width:50px; */
            /* height:60px;
            border:1px solid red; */
         
        }

        .first-tile {
            background:#080808;
        }

        .second-tile {
            background:#921f1d;
        }

        .third-tile {
            background:#cae8a2;
        }

        .fourth-tile {
            background:#1e2c0b;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h1>Checkerboard</h1>
            <?php for($i = 0; $i < 10; $i++) {
            ?>                
                <div class="row <?=  $i." ";?>">
                    <!-- row -->
                    <?php 
                        for($j = 0; $j < 10; $j++){ 
                            $bg ="";
                            if(($j % 2 === 0 AND $i % 2 === 0) OR ($i % 2 !==0 AND $j % 2 !==0 )){
                                $bg = "first-tile";
                            }else {
                                $bg = "second-tile";
                            }
                    ?>
                            <div class="column <?= $bg;?>"></div>
                    <?php } ?>
                </div>
            <?php }?>

        <br/>

        <?php for($i = 0; $i < 10; $i++) {
            ?>                
                <div class="row <?=  $i." ";?>">
                    <!-- row -->
                    <?php 
                        for($j = 0; $j < 10; $j++){ 
                            $bg ="";
                            if(($j % 2 === 0 AND $i % 2 === 0) OR ($i % 2 !==0 AND $j % 2 !==0 )){
                                $bg = "third-tile";
                            }else {
                                $bg = "fourth-tile";
                            }
                    ?>
                            <div class="column <?= $bg;?>"></div>
                    <?php } ?>
                </div>
            <?php }?>

    </div>
</body>
</html>