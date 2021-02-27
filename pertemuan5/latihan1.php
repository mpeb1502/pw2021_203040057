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
// array = variabel yang dapat memiliki banyak nilai
// seperti pensil warna
// elemen pada arry boleh memiliki tipe data yang berbeda

// cara membuat array
// cara lama
$hari = array ("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tuisan", false];

// cara Menampilkan array
// var_dump / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array bisa menggunakan echo
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambah elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo"<br>";
var_dump($hari);





?>