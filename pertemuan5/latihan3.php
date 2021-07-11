<?php 
$mahasiswa = [
    ["Zahid Najmu", "0139381", "Pendidikan Dokter", "znajm1773@gmail.com"],
    ["Ahmad Dzaky", "0139382", "Teknik Informatika", "dza-ku@gmail.com"],
    ["Bimo Kartiko", "0139383", "Teknik Industri", "bimo@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ol>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ol>
    <?php endforeach; ?>
    
</body>
</html>