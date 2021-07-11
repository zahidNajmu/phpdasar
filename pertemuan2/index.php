<?php
// Pertemuan 2 -PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump
// echo "jum'at";
// print "Hello World";
// print_r('Hello World');
// var_dump('Hello World');

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Zahid Najmu";

// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung String / concatenation / concat
// .
// $nama_depan = "Zahid";
// $nama_belakang = "Najmu";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Zahid";
// $nama .= " ";
// $nama .= "Najmu";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Operator Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);


?>









<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf" ?></p>

    <?php 
        echo "<h1>Halo, Selamat Datang Zahid Najmu</h1>"
    ?>

</body>
</html> -->