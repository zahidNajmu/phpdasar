<?php 
// $_GET
$coffee = [
    [
        "gambar" => "1.png",
        "item" => "Regular Coffee",
        "price" => "10.000",
        "jenis" => "Brazilian",
        "rate" => "4"
    ],
    [
        "gambar" => "2.png",
        "item" => "Special Coffee",
        "price" => "15.000",
        "jenis" => "Arabian",
        "rate" => "4"
    ],
    [
        "gambar" => "3.png",
        "item" => "Coffee Lite",
        "price" => "7.000",
        "jenis" => "Mocca",
        "rate" => "3"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <!-- <style>
        ul li {
            list-style: none;
        }
        img {
            width: 7em;
            float: left;
            margin: 5px;
        }
        .clear {
            clear: both;
        }
    </style> -->
</head>
<body>
    <h1>Daftar Harga</h1>
    <ul>
    <?php foreach( $coffee as $cf ) : ?>
        <li>
            <a href="latihan3.php?item=<?= $cf["item"]; ?>&price=<?= $cf["price"]; ?>&jenis=<?= $cf["jenis"]; ?>&rate=<?= $cf["rate"]; ?>&gambar=<?= $cf["gambar"]; ?>"><?= $cf["item"]; ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</body>
</html>