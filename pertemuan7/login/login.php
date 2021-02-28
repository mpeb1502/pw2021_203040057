<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 7 - 28 Februari 2021
Mempelajari mengenai POST - PHP
*/
?> 

<?php 
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
    // cek username & password
    if( $_POST["username"] == "febrian" && $_POST["password"] ==
    "100202" ) {
    // jika benar, redirect ke halaman admin
            header("Location: admin.php");
            exit;
    } else {
    // jika salah, tampilkam pesan kesalahan
            $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if( isset($error) ) : ?>
<p style="color : red; fon-style :italic;">username / password salah!</p>
<?php endif; ?>
<ul>
<form action="" method="post">
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>
</body>
</html>