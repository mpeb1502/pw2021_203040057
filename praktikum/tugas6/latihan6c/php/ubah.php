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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5b</title>
</head>

<body>
    <div class="container">
        <h2>Form Ubah Data Pemain</h2>
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
                <div class="input-field">
                    <input type="text" name="foto" id="foto" required value="<?= $mu['foto']; ?>">
                    <label for="foto">Foto</label>
                </div>
                <button type="submit" name="ubah">Ubah Data!</button>
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </div>
        </form>
    </div>

</body>

</html>