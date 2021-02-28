<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 7 - 28 Februari 2021
Mempelajari mengenai POST - PHP
*/
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
<form action="" method="post">
    Masukan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
    
</body>
</html>