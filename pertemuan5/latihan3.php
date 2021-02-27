<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 5 - 27 Februari 2021
Mempelajari mengenai Array - PHP
*/
?>

<?php 
// cara multi dimensi = array didalam array
$mahasiswa = [
    ["Febrian Fauzan Rachman", "203040057",
    "Teknik Informatika", "febrianfauzan860@gmail.com"],
    ["Haikal Fathan", "203040032",
    "Teknik Informatika", "haikalfathan60@gmail.com"],
    ["Daffa Aulia", "203040074",
    "Teknik Informatika", "daffaaulia80@gmail.com"],
];
?>
<!DOCTYPE html>
<html >
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<!--  CARA BIASA
<ul>
    <li>Febrian Fauzan Rachman</li>
    <lI>203040057</li>
    <li>Teknik Informatika</li>
    <li>febrianfauzan860@gmail.com</li>
</ul>
-->

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>