<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$manchesterunited = query("SELECT * FROM manchester_united");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5a</title>
</head>
<body>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
          <th>No</th>
          <th>opsi</th>
          <th>Foto</th>
          <th>Nama Pemain</th>
          <th>Deskripsi</th>
          <th>Lahir</th>
          <th>Berat Badan</th>
          <th>Tinggi Badan</th>        
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($manchesterunited as $mu) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id="<?= $mu['id'] ?>><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $mu['id']; ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
                </td>
                <td><img src="../assets/img/<?= $mu['img']; ?>"></td>
                <td><?= $mu["id"]; ?></td>
                <td><?= $mu["nama_pemain"]; ?></td>
                <td><?= $mu["deskripsi"]; ?></td>
                <td><?= $mu["lahir"]; ?></td>
                <td><?= $mu["berat_badan"] ?></td>
                <td><?= $mu["tinggi_badan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>