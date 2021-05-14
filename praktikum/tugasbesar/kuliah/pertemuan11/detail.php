<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];
// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mahasiswa['gambar']; ?>"></li>
    <li><?= $mahasiswa['nrp']; ?></li>
    <li><?= $mahasiswa['nama']; ?></li>
    <li><?= $mahasiswa['email']; ?></li>
    <li><?= $mahasiswa['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $mahasiswa['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
    <li><a href=" index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>