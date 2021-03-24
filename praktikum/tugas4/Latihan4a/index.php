<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 

// Membuat koneksi ke database
$connect = mysqli_connect("localhost", "root", "");
// Memilih database
mysqli_select_db($connect, "pw_tubes_203040057");
//Melakukan query dari database
$result = mysqli_query($connect, "SELECT * FROM manchester_united");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manchester United</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemain</th>
                    <th>Deskripsi</th>
                    <th>Lahir</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <abody>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row["id"]; ?></td>
                        <td><?= $row["nama_pemain"]; ?></td>
                        <td><?= $row["deskripsi"]; ?></td>
                        <td><?= $row["lahir"]; ?></td>
                        <td><?= $row["berat_badan"] ?></td>
                        <td><?= $row["tinggi_badan"]; ?></td>
                        <td>
                            <figure class="image is-120x120">
                                <img src="assets/img/<?= $row["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </abody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cari').DataTable();
        } );
    </script>
</body>
</html>