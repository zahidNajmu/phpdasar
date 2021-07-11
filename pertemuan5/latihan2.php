<?php 
// Pengulangan
// for / foreach
$numbers = [3,2,15,56,34,12,45,76,1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
        }
        
        div {
            width: 100px;
            height: 100px;
            background-color: salmon;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 3px;
            /* float: left; */
            font-size: 2rem;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($numbers); $i++ ) { ?>
    <div><?php echo $numbers[$i]; ?></div>
<?php } ?>

<?php foreach( $numbers as $number ) { ?>
    <div><?php echo $number ?></div>
<?php } ?>

<?php foreach( $numbers as $number ) : ?>
    <div><?= $number ?></div>
<?php endforeach ?>

    
</body>
</html>