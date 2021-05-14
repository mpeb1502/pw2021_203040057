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

require 'functions.php';
//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mu = query("SELECT * FROM manchesterunited WHERE id = $id")[0];

//cek tombol submit apakah sudah berfungsi atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
            </script>";
    }
}
?>

<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection" />

    <!-- Style Internal Css untuk halaman login-->

    <style>
        html,
        body {
            height: 100%;
        }

        html {
            display: table;
            margin: auto;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            background-image: url("../assets/img/login.jpg");
            background-position: center center;
        }

        .p {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
        }

        h3 {
            color: white;
            font-size: 20px;
        }

        form {
            width: 400px;
            margin-left: -50px;
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="p">Form Ubah Data Pemain</h3>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mu['id']; ?>">
            <div class="card-panel">
                <div class="input-field">
                    <input type="text" name="nama_pemain" id="nama_pemain" required value="<?= $mu['nama_pemain']; ?>">
                    <label for="nama_pemain">Nama Pemain</label>
                </div>
                <div class="input-field">
                    <input type="text" name="deskripsi" id="deskripsi" required value="<?= $mu['deskripsi']; ?>">
                    <label for="deskripsi">Deskripsi</label>
                </div>
                <div class="input-field">
                    <input type="text" name="lahir" id="lahir" required value="<?= $mu['lahir']; ?>">
                    <label for="lahir">Lahir</label>
                </div>
                <div class="input-field">
                    <input type="text" name="berat_badan" id="berat_badan" required value="<?= $mu['berat_badan']; ?>">
                    <label for="berat_badan">Berat Badan</label>
                </div>
                <div class="input-field">
                    <input type="text" name="tinggi_badan" id="tinggi_badan" required value="<?= $mu['tinggi_badan']; ?>">
                    <label for="tinggi_badan">Tinggi Badan</label>
                </div>
                <div>
                    <input type="hidden" name="foto" value=" <?= $mu['foto']; ?>">
                    <label>
                        <input type="file" name="foto" class="foto" onchange="previewImage()">
                    </label>
                    <img src="../assets/img/<?= $mu['foto']; ?>" width="150" style="display: block;">
                </div>
                <button type="submit" name="ubah">Ubah Data!</button>
                <button><a href="../php/admin.php" style="text-decoration: none; color: black;">Kembali</a></button>
            </div>
        </form>
    </div>

    <!--Materialize js internal script-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>

</body>

</html>