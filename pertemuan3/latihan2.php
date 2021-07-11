<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        /* body {
            font-family: Arial, Helvetica, sans-serif;
        }
    table tr td {
        border: 1px solid #000;
        padding: 20px;
        box-sizing: border-box;
        background: lightgreen;
    }
    table tr td:nth-child(even) {
        background: salmon;
    } */
    .warna-baris {
        background-color: #aaa;
    }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="20" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 0 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>