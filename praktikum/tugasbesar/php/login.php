<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : B
NRP :203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>


<?php
session_start();
require 'functions.php';
//melakukan pengecekan login jika sudah maka redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //ambil username dari id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

//Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      //jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<html>

<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection" />

  <!-- Style Internal Css untuk halaman login-->

  <style>
    html,
    body {
      height: 100%;
    }

    html {
      display: table;
      margin: auto;
    }

    body {
      display: table-cell;
      vertical-align: middle;
      background-image: url("login.jpg");
      background-position: center center;
    }

    .p {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Form Section -->
  <form action="" method="post">
    <div class="card-panel z-depth-5">
      <div class="row margin">
        <div class="col s12 m12 l12 center">
          <p class="p">Manchester United</p>
          <?php if (isset($error)) : ?>
            <p style="color: red;font-style:italic;">Username atau Password salah !</p>
          <?php endif; ?>
        </div>
      </div>

      <!-- Form Username Input Section -->

      <div class="col s12 m12 l12">
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="username" id="username">
          <label for="username">Username </label>
        </div>
      </div>

      <!-- Form Password Input Section -->

      <div class="col m12 l12">
        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input type="password" name="password" id="password">
          <label for="password">Password </label>
        </div>
      </div>

      <!-- Form Chekbox (Remember Me) Input Section -->

      <div class="left">
        <input type="checkbox" id="checkbox">
        <label for="checkbox">Remember Me</label>
      </div>
      <br><br>

      <!-- Form Button Section  -->

      <div class="center">
        <input type="submit" value="LOGIN" name="submit" class="btn red " style="width:100%; background-color: #36a5b2;">
      </div>
      <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="register.php">Disini !</a></p>
      </div>
    </div>
  </form>

  <!--Materialize js internal script-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
  </script>

</body>

</html>