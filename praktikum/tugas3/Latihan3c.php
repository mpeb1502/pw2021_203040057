<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 
$clubPemain = [
    "Juventus"=>"Cristiano Ronaldo",
    "Barcelona"=>"Lionel Messi",
    "Real Madrid"=>"Luka Modric",
    "Liverpool"=>"Mohammad Salah",
    "Paris Saint Germain"=>"Neymar Jr",
    "Liverpool"=>"Sadio Mane",
    "Ac Milan"=>"Zlatan Ibrahimovic"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3c</title>
</head>
<style>
        .kotak {
            border: 2px solid black;
            width: 50%;
            padding: 10px;
        }
</style>
</head>
<body>
    <div class="kotak">
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
            <?php foreach ($clubPemain as $club => $pemain) : ?>
                <tr>
                    <td><b><?= $pemain; ?></b></td>
                    <td>:</td>
                    <td><?= $club; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
    </div>
</body>
</html>