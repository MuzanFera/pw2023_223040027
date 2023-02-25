<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>

    <style>
        .wrap {
            display: flex;
        }

        .wrap span {
            display: flex;
            border-style: solid;
            border-width: 1px;
            width: 100px;
            height: 100px;
            align-items: center;
            background-color: gray;
            justify-content: space-around;
        }

        /* .wrap span p {
            color: whitesmoke;
            font-size: 50px;
        } */
    </style>

</head>
<body>
    
    <?php

    for ($i = 10; $i > 0; $i--) {
        $u = 1;
        print '    <div class="wrap">';
        for ($col = 0; $col < $i; $col++) {


    ?>

            <span><?= $u++; ?></span>

    <?php
        }
        print " </div>";
        // echo "<br>";
    } 
    
    ?>
        

</body>
</html>