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
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'functions.php';

// mengambil id dari url 
$id = $_GET['id'];


//melakukan query dengan parameter id yang diambil dari url
$mu = query("SELECT * FROM manchesterunited WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css style -->
    <link rel="stylesheet" href="../css/style.css">
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
            background-position: center;

        }

        .tombol-kembali {
            background-color: black;
            color: white;
        }

        .isi {
            font-family: 'Reggae One', cursive;
            color: red;
            text-align: center;
            font-size: 20px;


        }
    </style>
    <title>Manchester United</title>
</head>

<body>
    <div class="container" style="color: white;">
        <div class="isi ">
            <img src="../assets/img/<?= $mu["foto"]; ?>" alt="">
            <b>
                <p><?= $mu["nama_pemain"]; ?></p>
                <p><?= $mu["deskripsi"]; ?></p>
                <p><?= $mu["lahir"]; ?></p>
                <p><?= $mu["berat_badan"]; ?></p>
                <p><?= $mu["tinggi_badan"]; ?></p>
            </b>
            <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
        </div>
    </div>


</body>

</html>