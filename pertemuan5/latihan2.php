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
// Pegulangan pada araay
// for / foreach
// supaya php menghitung sendiri berapa jumlah elemen
// kita bisa menggunakan count()
$angka = [3,2,15,20,];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style> 
        .kotak {
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both;}
    </style>

</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>


</body>
</html>