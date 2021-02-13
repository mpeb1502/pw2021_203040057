<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 2 - 12 Februari 2021
Mempelajari mengenai sintaks - PHP
*/
?>


<?php
// Standar output = Sebuah fungsi PHP yang menampilkan sesuatu ke layar
// salah satu sintaknya = echo, print digunakan untuk mencetak tulisan,isi variabel
// Digunakan tahap develoment
// print_r = khusus digunakan untuk mencetak ray
// var_dump = menampilkan informasi tipe data dan ukurannya berapa
// Kutip dua ("") lebih sakti dari pada kutip satu ('') karena interpolasi
// Penggunaan var_dump  
// var_dump ("Selamat");
// Penggunaan print_r
// print_r ("Siang");
?>
<!-- PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Febrian Fauzan Rachman"; ?> </h1>

</body>
</html>

<!-- HTML di dalam PHP -->
<?php 
		echo "<html>
				<body>
				Selamat siang,
				saya sedang belajar PHP
				</body>
			 </html>";
?>

<!-- Variabeln dan tipe data -->
<?php
// Variabel di awali dengan tanda $
// tidak boleh diawali dengan angka, tapi boleh mngandung angka
// $nama = "Rachman";
// echo "Halo, nama saya $nama";

// Operator
// salah satunya Aritmatika
// + - * / %
// $x = 12;
// $y = 18;
// echo $x * $y;

// Penggabungan string / concatenation / concat
// .
// $nama_depan = "Fauzan";
// $nama_belakang = "Rachman"; 
// echo $nama_depan . " " . $nama_belakang;
// tanda kutip di atas memberikan spasi biar tidak menempel

// Assisgment / operator penugasan
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;
// $nama = "Febrian"
// $nama .= " ";
// $nama .= "Galih";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==
// var_dump (1 < 5); true/false
// untuk mengecek identitas dari sebuah nilai (===)

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);
// && = dua duanya harus benar
// || = salah satu nya saja benar
?>
