<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 
    function gantiStyle($tulisan, $style1, $style2){ 
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Latihan 2a</title>

    <style>
    .ubahTulisan{
        font: italic bolder 28px Arial;
        color: #8c782d;
    }
    .wrapper{
        border: 1px  black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 20);
        width: fit-content;
        padding: 10px;
    }
    </style>
</head>
<body>
    <?= gantiStyle("Selamat datang di praktikum pw", "ubahTulisan", "wrapper") ?>
</body>
</html>