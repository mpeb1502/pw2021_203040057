<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : B 
Nrp : 203040057
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

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php'
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
            margin-left: -95px;
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3><b>Form Tambah Pemain</b></h3>
        <form action="" method="post">
            <div class="card-panel">
                <div class="input-field">
                    <input type="text" name="nama_pemain" id="nama_pemain" required class="validate">
                    <label for="nama_pemain">Nama Pemain</label>
                </div>
                <div class="input-field">
                    <input type="text" name="deskripsi" id="deskripsi" required class="validate">
                    <label for="deskripsi">Deskripsi</label>
                </div>
                <div class="input-field">
                    <input type="text" name="lahir" id="lahir" required class="validate">
                    <label for="lahir">Lahir</label>
                </div>
                <div class="input-field">
                    <input type="text" name="berat_badan" id="berat_badan" required class="validate">
                    <label for="berat_badan">Berat Badan</label>
                </div>
                <div class="input-field">
                    <input type="text" name="tinggi_badan" id="tinggi_badan" required class="validate">
                    <label for="tinggi_badan">Tinggi Badan</label>
                </div>
                <div class="input-field">
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                    </label>
                    <img src="../assets/img/nophoto.png" width="150" style="display: block;" class="img-preview">
                    </li>
                </div>
                <button type="submit" name="tambah">Tambah Data!</button>
                <button><a href="admin.php" style="text-decoration: none; color: black;">Kembali</a></button>
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