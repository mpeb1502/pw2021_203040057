<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php

// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query dengan memanggil function
$manches = query("SELECT * FROM manchesterunited");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manchester United</title>

</head>

<body>
    <a href="php/login.php">
        <button type="">Masuk ke halaman admin</button>
    </a>
    <div class="container mt-5 mb-5">
        <table border="1" id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemain</th>
                    <th>Deskripsi</th>
                    <th>Lahir</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Foto</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($manches as $mu) : ?>
                    <tr>
                        <td><?= $mu["id"]; ?></td>
                        <td><?= $mu["nama_pemain"]; ?></td>
                        <td><?= $mu["deskripsi"]; ?></td>
                        <td><?= $mu["lahir"]; ?></td>
                        <td><?= $mu["berat_badan"] ?></td>
                        <td><?= $mu["tinggi_badan"]; ?></td>
                        <td>
                            <figure class="image is-120x120">
                                <img src="assets/img/<?= $mu["foto"]; ?>" alt="">
                            </figure>
                        </td>
                        <td>
                            <p class="Nama Pemain">
                                <a href="php/detail.php?id=<?= $mu['id'] ?>">
                                    Detail
                                </a>
                            </p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#cari').DataTable();
        });
    </script>
</body>

</html>s