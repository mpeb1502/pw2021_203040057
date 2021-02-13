<?php
// User-defined Function = ditentukan si pengguna
function salam($waktu ="Siang", $nama = "Mpeb") {
    return "Selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
</body>
</html>