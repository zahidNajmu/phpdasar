<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        /* body {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        } */
        .kotak {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
            width: 120px;
            height: 120px;
            background-color: #bada55;
            text-align: center;
            line-height: 120px;
            margin: 3px;
            transition: 1s;
            float: left;
        }

        .clear {
            clear: left;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <?php 
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];    
    ?>
    <?php foreach( $angka as $num ) : ?>
        <?php foreach( $num as $a ) : ?>
        <div class="kotak"><?= $a ?></div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>

</body>
</html>