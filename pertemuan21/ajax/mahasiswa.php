<?php
require "../functions.php";
$keyword = $_GET["keyword"];
$query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ORDER BY id DESC
            ";
$mahasiswa = query($query);


?>
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
                <div class="tombol"><a href="ubah.php?id=<?= $row["id"]; ?>">edit</a></div>
                <div class="tombol"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')">delete</a></div>
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