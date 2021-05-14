<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 13 - 19 April 2021
Mempelajari Tentang AJAX Live Search & Upload Gambar  - PHP
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url 
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');          
          document.location.href = 'index.php';
          </script>";
} else {
  echo "data gagal dihapus!";
}
