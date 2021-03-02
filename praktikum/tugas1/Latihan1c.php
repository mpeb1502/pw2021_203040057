<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>

    <style>
        .salmon {
            background-color: salmon;
            height: 50px;
            width: 50px;
            display: inline-block;
            border: 3px solid black;
            font-weight: bold;
            line-height: 50px;
            text-align: center;
            margin-bottom: 5px;
            border-radius: 60px;

        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="salmon"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>
    
</body>
</html>