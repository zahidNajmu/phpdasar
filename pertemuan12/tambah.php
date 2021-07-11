<?php 
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
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" required >
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" >
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="email" name="email" >
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" >
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" >
                </label>    
            </li>
            <li>
                <button type="submit" name="submit">Tambah !</button>
            </li>
        </ul>
        <?php  ?>
    
    </form>
    
</body>
</html>