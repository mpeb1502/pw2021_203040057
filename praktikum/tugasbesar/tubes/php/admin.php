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

if (isset($_GET["cari"])) {
    $keyword = $_GET['keyword'];
    $manches = query("SELECT * FROM manchesterunited WHERE
                                nama_pemain LIKE '%$keyword%' OR
                                deskripsi LIKE '%$keyword%' OR
                                lahir LIKE '%$keyword%' OR
                                berat_badan LIKE '%$keyword%' OR 
                                tinggi_badan LIKE '%$keyword%' OR
                                foto LIKE '%$keyword%' 
                                ");
} else {
    $manches = query("SELECT * FROM manchesterunited");
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Admin</title>

    <style>
        .isi {
            font-family: 'Reggae One', cursive;
            color: white;
        }

        .navbar {
            background-color: black;
        }

        table {
            background-color: red;
        }

        .tb {
            color: white;
        }

        .bt {
            background-color: black;
            color: white;
            font-family: 'Reggae One', cursive;
        }

        .footer-img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100px;
            height: 100px;
        }

        p {
            color: red;
            font-family: 'Reggae One', cursive;
            font-size: 50px;

        }
    </style>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-red">
        <div class="container">
            <img class="footer-img" src="../assets/img/footer.jpg">
            <p>Manchester United</p>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" style="color: white; font-family: 'Reggae One', cursive;" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php" style="color: white; font-family: 'Reggae One', cursive;">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: red; font-family: 'Reggae One', cursive;" href="logout.php">Logout</a>
                    </li>
                </ul>
                <form class="form-inline" method="GET">
                    <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
                    <button class="bt" name="cari" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <table class="table table-bordered">
        <tr class="tb">
            <th>#</th>
            <th scope="col">Opsi</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Lahir</th>
            <th scope="col">Berat Badan</th>
            <th scope="col">Tinggi Badan</th>
            <th scope="col">Foto</th>
        </tr>
        <tr>
            <?php foreach ($manches as $mu) : ?>
        <tr class="isi">
            <td><?= $mu["id"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $mu["id"] ?>"><button><b>ubah</b></button></a>
                <a href="hapus.php?id=<?= $mu["id"] ?>" onclick="return confirm('Hapus Data?')"><button class="cc"><b>hapus</b></button></a>
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
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>