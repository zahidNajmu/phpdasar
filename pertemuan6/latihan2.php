<?php 
// $mahasiswa = [
    // ["Zahid Najmu", "0192267309", "znajm1773@gmail.com", "Pendidikan Dokter"],
    // ["Ahmad Dzaky", "0192267303", "dza-ku@gmail.com", "Teknik Informatika"],
    // ["Bimo Kartiko", "0192267302", "bimoaja@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Zabil Cafe</title>
    <style>
        ul li {
            list-style: none;
        }
        img {
            width: 5em;
            float: left;
            margin: 5px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h1>Daftar Harga</h1>

    <?php foreach( $coffee as $cf ) : ?>
    <ul>
        <li>
            <img src="img/<?= $cf["gambar"] ?>" alt="">
        </li>
        <li>Item :  <?= $cf["item"] ?></li>
        <li>Price : Rp.<?= $cf["price"] ?>,00.-</li>
        <li>Rate : <?= $cf["rate"] ?> / 5</li>
        <li>Species : <?= $cf["jenis"] ?> Coffee Seed</li>
        <div class="clear"></div>
    </ul>
    <?php endforeach ?>
</body>
</html>