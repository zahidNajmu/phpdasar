<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
}

require 'functions.php'; //menulis function.php / include
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// tombol cari ditekan
if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

// Check Connection
// if ( mysqli_connect_errno() ){
//     echo "Koneksi databse gagal : " . mysqli_connect_error();
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
    :root {
    font-size: 16px;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    a:hover {
        opacity: .7;
    }

    body {
        background-color: rgba(255, 179, 11, 1);
        height: 100vh;
        font-family: monospace;
    }

    html, body {
        margin: 0;
        padding: 0;
    }

    section {
        margin-top: -5px;
        padding: 5px;
        background-color: rgba(243, 106, 62, 1);
        color: white;
    }

    h1 {
        font-size: 3rem;
        text-align: center;
        margin: 0;
    }

    svg, svg path {
        margin-top: -30px;
        padding: 0;
    }

    button {
        background-color: rgba(3, 179, 248, 0.7);
        color: white;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .7);
        padding: 5px;
        transition: .3s;
        border: .5px solid rgba(3, 179, 248, 1);
        border-radius: 1em;
        cursor: pointer;
    }

    button:hover {
        background-color: rgba(3, 179, 248, 1);
        box-shadow: 0 4px 3px rgba(0, 0, 0, .4);
        transform: translateY(-2px);
    }

    .logout {
        position: relative;
        top: 10px;
        left: 10px;
        padding: 5px 15px;
    }

    input {
        border-radius: 7px;
        border: none;
        padding: 7px;
        color: lightseagreen;
        max-width: 100%;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .7);
        transition: .3s;
    }

    input:focus {
        transform: translateY(-2px);
        box-shadow: 0 6px 4px rgba(0, 0, 0, .3);
        /* margin-top: 2px; */
    }
    div.tombol {
        display: inline-block;
        background-color: rgba(3, 179, 248, 0.7);
        color: white;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .7);
        padding: 5px;
        transition: .3s;
        border: .5px solid rgba(3, 179, 248, 1);
        border-radius: .5em;
        cursor: pointer;
        margin-bottom: .4em;
    }

    div.tombol:hover {
        background-color: rgba(3, 179, 248, 1);
        box-shadow: 0 4px 3px rgba(0, 0, 0, .4);
        transform: translateY(-2px);
    }

    svg, section {
        transition: 1s;
    }
    </style>
    </head>
    <body>

        <button class="logout"><a href="logout.php">Logout</a></button>
        
        <h1>Hai <?php if(isset( $_SESSION["nama"])) {
            echo $_SESSION["nama"];
        }; ?>, Selamat Pagi</h1>
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,392L20,400.2C40,408,80,425,120,392C160,359,200,278,240,212.3C280,147,320,98,360,114.3C400,131,440,212,480,228.7C520,245,560,196,600,187.8C640,180,680,212,720,196C760,180,800,114,840,114.3C880,114,920,180,960,171.5C1000,163,1040,82,1080,57.2C1120,33,1160,65,1200,114.3C1240,163,1280,229,1320,261.3C1360,294,1400,294,1440,285.8C1480,278,1520,261,1560,212.3C1600,163,1640,82,1680,106.2C1720,131,1760,261,1800,261.3C1840,261,1880,131,1920,73.5C1960,16,2000,33,2040,89.8C2080,147,2120,245,2160,277.7C2200,310,2240,278,2280,253.2C2320,229,2360,212,2400,187.8C2440,163,2480,131,2520,106.2C2560,82,2600,65,2640,73.5C2680,82,2720,114,2760,163.3C2800,212,2840,278,2860,310.3L2880,343L2880,490L2860,490C2840,490,2800,490,2760,490C2720,490,2680,490,2640,490C2600,490,2560,490,2520,490C2480,490,2440,490,2400,490C2360,490,2320,490,2280,490C2240,490,2200,490,2160,490C2120,490,2080,490,2040,490C2000,490,1960,490,1920,490C1880,490,1840,490,1800,490C1760,490,1720,490,1680,490C1640,490,1600,490,1560,490C1520,490,1480,490,1440,490C1400,490,1360,490,1320,490C1280,490,1240,490,1200,490C1160,490,1120,490,1080,490C1040,490,1000,490,960,490C920,490,880,490,840,490C800,490,760,490,720,490C680,490,640,490,600,490C560,490,520,490,480,490C440,490,400,490,360,490C320,490,280,490,240,490C200,490,160,490,120,490C80,490,40,490,20,490L0,490Z"></path></svg>
        <section>
            <button><a href="tambah.php">Tambah Data Mahasiswa</a></button>
            <br><br>

            <form method="post" action="">
            
                <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" >
                <button type="submit" name="cari" style="width: 5em;">Cari!</button>
            
            </form>
            <br>

            <table cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach( $mahasiswa as $row ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <div class="tombol"><a href="ubah.php?id=<?= $row["id"]; ?>">edit</a></div>
                        <div class="tombol"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')">delete</a></div>
                    </td>
                    <td><img src="img/<?= $row["gambar"] ?>" alt="" width="50px"></td>
                    <td><?= $row["nrp"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["jurusan"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>

            </table>
        </section>
        

    </body>
</html>