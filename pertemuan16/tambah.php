<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
}
require "functions.php";
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0 ) {

        echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal ditambahkan!');
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
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    
    <div class="container">

        <form action="" method="post" enctype="multipart/form-data" >

            <label>
                NRP :
                <input type="text" name="nrp" required >
            </label>
            <label>
                Nama :
                <input type="text" name="nama" >
            </label>
            <label>
                Email :
                <input type="email" name="email" >
            </label>
            <label>
                Jurusan :
                <input type="text" name="jurusan" >
            </label>
            <label>
                Gambar :
                <input type="file" name="gambar" >
            </label>
            <button type="submit" name="submit">Tambah !</button>

        </form>

    </div>
    
</body>
</html>