<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>

    <style>

        .wrap {
            width: 246px;
            height: 240px;
            border: 1px solid black;
            overflow: hidden;

        }

        .black,
        .white {
            background-color: #000;
            width: 50px;
            height: 50px;
            display: inline-block;
            margin: 0;
            margin-right: -5px;
            margin-top: -5px;
            z-index: -1;
            position: relative;
        }

        .white {
            background-color: #FFFFFF;
        }

    </style>

</head>
<body>


    <div class="wrap">

        <?php

        $i = 1;

        for ($i = 1; $i <= 25; $i++) {
            if ($i % 2 == 0) {

                print '    <div class="white"></div>';
            } else {
                print '   <div class="black"></div>';
            }
        }

        ?>

    </div>


</body>
</html>