<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 
    // array namanya bebas 
    $nama = ["Mohammad Salah", 
             "Cristiano Ronaldo", 
             "Lionel Messi", 
             "Zlatan Ibrahimovic", 
             "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b</title>
    <style>
        .kotak {
            border: 2px solid black;
            width: 50%;
            padding: 10px;
        }
        p {
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <p>Daftar pemain bola terkenal</p>
            <ol>
                <?php foreach($nama as $n) : ?>                   
                        <li><?= $n; ?></li>                  
                <?php endforeach ?>
            </ol>
            <?php
                array_push($nama, 'Luca Modrie', 'Sadio Mane');
                sort($nama);
            ?>
            <p>Daftar pemain bola terkenal baru</p>
            <ol>
                <?php foreach($nama as $n) : ?>                   
                        <li><?= $n; ?></li>                  
                <?php endforeach ?>
            </ol>
           
    </div>
</body>
</html>