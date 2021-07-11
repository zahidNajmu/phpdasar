<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "functions.php";

// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .input {
            display: flex;
            flex-direction: row;
        }
    </style>
</head>

<body>
    <a href="index.php" class="home"><i class="bi bi-house-door"></i></a>
    <h1>Ubah Data Mahasiswa</h1>
    <div class="container">

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
            <div class="input">
                <div class="non-gambar">
                    <label>
                        NIM :
                        <input type="text" name="nim" required value="<?= $mhs["nim"] ?>">
                    </label>
                    <label>
                        Nama :
                        <input type="text" name="nama" value="<?= $mhs["nama"] ?>">
                    </label>
                    <label>
                        Email :
                        <input type="email" name="email" value="<?= $mhs["email"] ?>">
                    </label>
                    <label>
                        Jurusan :
                        <input type="text" name="jurusan" value="<?= $mhs["jurusan"] ?>">
                    </label>
                </div>
                <div class="input-gambar">
                    <label>
                        Gambar :
                        <br>
                        <img src="img/<?= $mhs["gambar"]; ?> " alt="" width="180">
                        <br>
                        <input type="file" name="gambar">
                    </label>
                </div>
            </div>

            <button type="submit" name="submit">Ubah !</button>
        </form>


    </div>


</body>

</html>