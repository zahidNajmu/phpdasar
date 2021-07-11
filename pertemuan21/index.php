<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require 'functions.php'; //menulis function.php / include
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");


// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <style>
        @media print {

            .logout,
            .keyword,
            .tambah,
            svg {
                display: none;
            }
        }
    </style>
</head>

<body>

    <button class="logout"><a href="logout.php">Logout</a></button>

    <h1>Hai <?php if (isset($_SESSION["nama"])) {
                echo $_SESSION["nama"];
            }; ?>, Selamat Pagi</h1>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,392L20,400.2C40,408,80,425,120,392C160,359,200,278,240,212.3C280,147,320,98,360,114.3C400,131,440,212,480,228.7C520,245,560,196,600,187.8C640,180,680,212,720,196C760,180,800,114,840,114.3C880,114,920,180,960,171.5C1000,163,1040,82,1080,57.2C1120,33,1160,65,1200,114.3C1240,163,1280,229,1320,261.3C1360,294,1400,294,1440,285.8C1480,278,1520,261,1560,212.3C1600,163,1640,82,1680,106.2C1720,131,1760,261,1800,261.3C1840,261,1880,131,1920,73.5C1960,16,2000,33,2040,89.8C2080,147,2120,245,2160,277.7C2200,310,2240,278,2280,253.2C2320,229,2360,212,2400,187.8C2440,163,2480,131,2520,106.2C2560,82,2600,65,2640,73.5C2680,82,2720,114,2760,163.3C2800,212,2840,278,2860,310.3L2880,343L2880,490L2860,490C2840,490,2800,490,2760,490C2720,490,2680,490,2640,490C2600,490,2560,490,2520,490C2480,490,2440,490,2400,490C2360,490,2320,490,2280,490C2240,490,2200,490,2160,490C2120,490,2080,490,2040,490C2000,490,1960,490,1920,490C1880,490,1840,490,1800,490C1760,490,1720,490,1680,490C1640,490,1600,490,1560,490C1520,490,1480,490,1440,490C1400,490,1360,490,1320,490C1280,490,1240,490,1200,490C1160,490,1120,490,1080,490C1040,490,1000,490,960,490C920,490,880,490,840,490C800,490,760,490,720,490C680,490,640,490,600,490C560,490,520,490,480,490C440,490,400,490,360,490C320,490,280,490,240,490C200,490,160,490,120,490C80,490,40,490,20,490L0,490Z"></path>
    </svg>
    <section>
        <a href="tambah.php"><button class="tambah">Tambah Data Mahasiswa</button></a>
        <br><br>

        <form method="post" action="">

            <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword" class="keyword">
            <button type="submit" name="cari" style="width: 5em;" id="tombol-cari">Cari!</button>

            <img src="img/loader.gif" class="loader">

        </form>
        <br>

        <table cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">
                            <div class="tombol">edit</div>
                        </a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')">
                            <div class="tombol">delete</div>
                        </a>
                    </td>
                    <td><img src="img/<?= $row["gambar"] ?>" alt="" width="50px"></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["jurusan"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>

        </table>
        <br><br>
    </section>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 260" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,78L12,104C24,130,48,182,72,182C96,182,120,130,144,95.3C168,61,192,43,216,60.7C240,78,264,130,288,143C312,156,336,130,360,104C384,78,408,52,432,60.7C456,69,480,113,504,121.3C528,130,552,104,576,82.3C600,61,624,43,648,65C672,87,696,147,720,169C744,191,768,173,792,147.3C816,121,840,87,864,91C888,95,912,139,936,130C960,121,984,61,1008,56.3C1032,52,1056,104,1080,138.7C1104,173,1128,191,1152,190.7C1176,191,1200,173,1224,151.7C1248,130,1272,104,1296,78C1320,52,1344,26,1368,26C1392,26,1416,52,1440,73.7C1464,95,1488,113,1512,104C1536,95,1560,61,1584,47.7C1608,35,1632,43,1656,60.7C1680,78,1704,104,1716,117L1728,130L1728,260L1716,260C1704,260,1680,260,1656,260C1632,260,1608,260,1584,260C1560,260,1536,260,1512,260C1488,260,1464,260,1440,260C1416,260,1392,260,1368,260C1344,260,1320,260,1296,260C1272,260,1248,260,1224,260C1200,260,1176,260,1152,260C1128,260,1104,260,1080,260C1056,260,1032,260,1008,260C984,260,960,260,936,260C912,260,888,260,864,260C840,260,816,260,792,260C768,260,744,260,720,260C696,260,672,260,648,260C624,260,600,260,576,260C552,260,528,260,504,260C480,260,456,260,432,260C408,260,384,260,360,260C336,260,312,260,288,260C264,260,240,260,216,260C192,260,168,260,144,260C120,260,96,260,72,260C48,260,24,260,12,260L0,260Z"></path>
    </svg>
    <footer class="bg-primary text-white text-center pb-5">
        <p style="text-align: center; padding: 10px;">Created with <i class="bi bi-heart-fill" style="color: red;"></i> by <a href="http://instagram.com/znajmu_" target="_blank" rel="noopener noreferrer" class="fw-bold">ZahidNajmu</a></p>
    </footer>
</body>

</html>