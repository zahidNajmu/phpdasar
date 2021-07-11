<?php
// Date
// Menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalusejak 1 januari 1970
    // echo time();

    // echo date("l, d M Y", time() - 60 * 60 * 24 * 100);
    
    // $jamSekarang = time();
    // if( $jamSekarang > 6 && $jamSekarang <= 12 ) {
    //     echo "pagi";
    // } else if( $jamSekarang > 12 && $jamSekarang <= 16 ) {
    //     echo "siang";
    // } else if( $jamSekarang > 16 && $jamSekarang <= 18 ) {
    //     echo "sore";
    // } else {
    //     echo "malam";
    // }


    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,7,17,2003));

    // strtotime
    // echo date("l", strtotime("17 july 2003"));

    // 1. String
    // 2. Utility

    // explode
    // explode("separator", variable, limit<opt>);
    // $makan = "ayam|nasi|daging|sapi";
    // $tes = explode("|", $makan, -1);
    // var_dump($tes);

    // strlen
    // $str = ' ab cd ';
    // echo strlen($str); // 7


    // strcmp()

    // 2. Utility
    // $utility = 21;
    // var_dump($utility);
    // echo isset($utility);
    // echo empty($utility);
    // die();
    // sleep(2);




?>
<!-- php.net search date -->