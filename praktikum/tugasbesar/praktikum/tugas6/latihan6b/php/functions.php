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

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040057");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $manches = [];
    while ($mu = mysqli_fetch_assoc($result)) {
        $manches[] = $mu;
    }
    return  $manches;
}

function tambah($data)
{
    $conn = koneksi();

    $nama_pemain = htmlspecialchars($data['nama_pemain']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $lahir = htmlspecialchars($data['lahir']);
    $berat_badan = htmlspecialchars($data['berat_badan']);
    $tinggi_badan = htmlspecialchars($data['tinggi_badan']);
    $foto = htmlspecialchars($data['foto']);

    $query = "INSERT INTO manchesterunited
                        VALUES
                        ('','$nama_pemain', '$deskripsi', '$lahir', '$berat_badan', '$tinggi_badan', '$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM manchesterunited WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama_pemain = htmlspecialchars($data['nama_pemain']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $lahir = htmlspecialchars($data['lahir']);
    $berat_badan = htmlspecialchars($data['berat_badan']);
    $tinggi_badan = htmlspecialchars($data['tinggi_badan']);
    $foto = htmlspecialchars($data['foto']);

    $query = "UPDATE manchesterunited SET
                nama_pemain = '$nama_pemain',
                deskripsi = '$deskripsi',
                lahir = '$lahir',
                berat_badan = '$berat_badan',
                tinggi_badan = '$tinggi_badan',
                foto = '$foto'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>