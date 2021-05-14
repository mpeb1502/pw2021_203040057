<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$manches = query("SELECT * FROM manchesterunited");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .ian{
            margin-top: 20px;
            margin-left: 20px;
        }
    </style>
    <title>Manchester United</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>
<body>
    <a href="./tambah.php"><button class="ian">Tambah Data</button></a>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Nama Pemain</th>
                    <th>Deskripsi</th>
                    <th>Lahir</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($manches as $mu) : ?>
                    <tr>
                        <td><?= $mu["id"]; ?></td>
                        <td>
                            <a href=""><button><b>Change</b></button></a>
                            <a href="hapus.php?id=<?= $mu["id"] ?>" onclick="return confirm('Hupus Data?')"><button class="cc"><b>Delete</b></button></a>
                        </td>
                        <td><?= $mu["nama_pemain"]; ?></td>
                        <td><?= $mu["deskripsi"]; ?></td>
                        <td><?= $mu["lahir"]; ?></td>
                        <td><?= $mu["berat_badan"] ?></td>
                        <td><?= $mu["tinggi_badan"]; ?></td>
                        <td>
                            <figure class="image is-120x120">
                                <img src="../assets/img/<?= $mu["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cari').DataTable();
        } );
    </script>
</body>
</html>