<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 7 - 28 Februari 2021
Mempelajari mengenai GET  - PHP
*/
?> 

<?php 
// Variabel Scope / lingkup variabel
$x = 10; // variabel local untuk halaman
// variabel local untuk function saja
// function tampilX() {
//     $x = 20;
//     echo $x;
// }
// tampilX();
// echo "<br>";
// echo $x;

// global 
// function tampilX() {
//     global $x;
//     echo $x;

// Superglobals = variabel - variabel yang sudah di miliki php yang bisa kita akses dimanapun kapanpun
// $_GET = masih kosong
// $_POST = masih kosong
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER = isinya server kita
// $_ENV
// semuanya merupakan array Associative
?>

<?php 
// $_GET
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
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
        <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=
        <?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </a>
    </li>
<?php endforeach; ?>

</ul>
    

</body>
</html>

