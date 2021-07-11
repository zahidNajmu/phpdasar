<?php 
require "functions.php";

// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0 ) {
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
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <ul>
            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" required value="<?= $mhs["nrp"] ?>" >
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" value="<?= $mhs["nama"] ?>" >
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="email" name="email" value="<?= $mhs["email"] ?>" >
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" value="<?= $mhs["jurusan"] ?>" >
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" value="<?= $mhs["gambar"] ?>" >
                </label>    
            </li>
            <li>
                <button type="submit" name="submit">Ubah !</button>
            </li>
        </ul>
    
    </form>
    
</body>
</html>