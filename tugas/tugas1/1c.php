<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c</title>

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

        .wrap span p {
            color: whitesmoke;
            font-size: 50px;
        }
    </style>

</head>
<body>
    
    <div class="wrap">
        <span>
            <p>
                1
            </p>
        </span>
    </div>

    <div class="wrap">
        <span>
            <p>
                2
            </p>
        </span>
        <span>
            <p>
                2
            </p>
        </span>
    </div>

    <div class="wrap">
        <span>
            <p>
                3
            </p>
        </span>
        <span>
            <p>
                3
            </p>
        </span>
        <span>
            <p>
                3
            </p>
        </span>
    </div>

</body>
</html>