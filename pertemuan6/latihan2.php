<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 6 - 27 Februari 2021
Mempelajari mengenai Associative Array - PHP
*/
?>

<?php 
// Array Associative
// definiinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
         "nrp" => "203040057",
         "nama" => "Febrian Fauzan Rachman",
         "email" => "febrianfauzan860@gmail.com",
         "jurusan" => "Teknik Informatika",
         "gambar" => "FebrianFauzan.jpeg"
    ],
    [
        "nama" => "Haikal Fathan",
         "nrp" => "203040032",
         "email" => "haikalfathan60@gmail.com",
         "jurusan" => "Teknik Industri",
         "gambar" => "HaikalFathan.jpeg"

    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>

