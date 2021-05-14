<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : B
NRP :203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$manches = query("SELECT * FROM manchesterunited");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .ian {
            margin-top: 20px;
            margin-left: 20px;
        }
    </style>
    <title>Manchester United</title>
</head>

<body>
    <div class="logout">
        <a href="logout.php"><button class="ian">Logout</button></a>
    </div>
    <a href="tambah.php"><button class="ian">Tambah Data</button></a>
    <div class="container mt-5 mb-5">
        <table border="1" id="cari">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Nama Pemain</th>
                    <th>Deskripsi</th>
                    <th>Lahir</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($manches as $mu) : ?>
                    <tr>
                        <td><?= $mu["id"]; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $mu["id"] ?>"><button><b>Change</b></button></a>
                            <a href="hapus.php?id=<?= $mu["id"] ?>" onclick="return confirm('Hapus Data?')"><button class="cc"><b>Delete</b></button></a>
                        </td>
                        <td><?= $mu["nama_pemain"]; ?></td>
                        <td><?= $mu["deskripsi"]; ?></td>
                        <td><?= $mu["lahir"]; ?></td>
                        <td><?= $mu["berat_badan"] ?></td>
                        <td><?= $mu["tinggi_badan"]; ?></td>
                        <td>
                            <figure class="image is-120x120">
                                <img src="../assets/img/<?= $mu["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#cari').DataTable();
        });
    </script>
</body>

</html>