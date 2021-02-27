<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 6 - 27 Februari 2021
Mempelajari mengenai Associative Array - PHP
*/
?> 


<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array</title>
    <style> 
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>

</head>
<body>

<?php 
// mencetak array multi dimensi
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>

