<?php 
// cek apakah tidak ada di $_GET
if( !isset($_GET["item"]) || 
    !isset($_GET["price"]) ||
    !isset($_GET["jenis"]) ||
    !isset($_GET["gambar"]) ||
    !isset($_GET["rate"])
 ) {
    // redirect
    header("Location: latihan2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Item</title>
</head>
<body>
    <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
    <li><?= $_GET["item"]; ?></li>
    <li><?= $_GET["price"]; ?></li>
    <li><?= $_GET["jenis"]; ?></li>
    <li><?= $_GET["rate"]; ?></li>

    <a href="latihan2.php">Kembali Ke Daftar Menu</a>
</body>
</html>