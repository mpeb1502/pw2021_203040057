<?php
/*
Nama : Febrian Fauzan Rachman
Kelas : 203040057
Shift : 10.00 - 11.00 Jum'at
https://github.com/mpeb1502/pw2021_203040057
*/
?>

<?php 
    // function untuk melakukan koneksi ke database dan memilih database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040057");

        return $conn;
    }

    // function untuk melakukan query dan memasukannya kedalam array
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;

        }
        return $rows;
    }
    // fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
    $conn = koneksi();

    $nama_pemain = htmlspecialchars($data['nama_pemain']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $lahir = htmlspecialchars($data['lahir']);
    $berat_badan = htmlspecialchars($data['berat_badan']);
    $tinggi_badan = htmlspecialchars($data['tinggi_badan']);
    $foto = htmlspecialchars($data['foto']);

    $query = "INSERT INTO manchester_united
                            VALUES
                            ('',, '$nama_pemain', '$deskripsi', '$lahir', '$berat_badan', '$tinggi_badan', '$foto')";
                            mysqli_query($conn, $query);
                            return mysqli_affected_rows($conn);
    }
?>
