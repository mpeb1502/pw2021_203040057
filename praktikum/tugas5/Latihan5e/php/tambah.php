<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php
    require 'functions.php';

    if (isset($_POST['tambah'])) {
        if (tambah($_POST) > 0) {
            echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
        } else {
            echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5b</title>
</head>
<body>
    <div class="container">
        <h3>Form Tambah Pemain</h3>
        <form action="" method="post">
        <div class="card-panel">
        <div class="input-field">
        <input type="text" name="nama_pemain" id="nama_pemain" required class="validate">
        <label for="nama_pemain">Nama Pemain</label>
        </div>
        <div class="input-field">
        <input type="text" name="deskripsi" id="deskripsi" required class="validate">
        <label for="deskripsi">Deskripsi</label>
        </div>
        <div class="input-field">
        <input type="text" name="lahir" id="lahir" required class="validate">
        <label for="lahir">Lahir</label>
        </div>
        <div class="input-field">
        <input type="text" name="berat_badan" id="berat_badan" required class="validate">
        <label for="berat_badan">Berat Badan</label>
        </div>
        <div class="input-field">
        <input type="text" name="tinggi_badan" id="tinggi_badan" required class="validate">
        <label for="tinggi_badan">Tinggi Badan</label>
        </div>
        <div class="input-field">
        <input type="text" name="foto" id="foto" required class="validate">
        <label for="foto">Foto</label>
        </div>
        <button type="submit" name="tambah">Tambah Data!</button>
        <a href="../indeks.php" style="text-decoration: none; color: black;">Kembali</a>
        </div>
        </form>
    </div>
    
</body>
</html>