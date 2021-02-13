<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 4 - 14 Februari 2021
Mempelajari mengenai Function - PHP
*/
?>

<?php
    // kelebihan Function
    // potongan program atau baris-baris kode. kode tersebut bisa di kasih nama dan di panggil berulang-ulang
    // Built-in Function = Bawaan Function
    // http://php.net/manual/en/funcref.php
    // Date 
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 january 1970
    
    //mengecek 100 hari kebelakang dan kedepan
    // echo date("d M Y", time()-60*60*24*100 );

    // mktime
    // membuat sendiri detik
    // mktime (0,0,0,0,0,0)
    //mktime (jam, detik, bulan, tanggal, tahun)
    // echo date("l", mktime(0,0,0,2,10,2002));

    // strtotime
    echo date("l", strtotime("10 feb 2002"));

    //  yang ada hubungannya dengan String(tipe data)
    //  strlen = untuk menghitung panjang sebuah string line dari sebuah string
    //  strcmp/stringcompare = untuk menggabungkan/membandingkan 2 buah string
    //  explode = untuk memecah string menjadi array 
    //  htmlspecialchars = pasion khusus untuk menjaga kita dari hacker

    // yang ada hubungannya dengan Utility(fungsi bantuan)
    // var_dump = untuk mencetak isi dari variabel,array,object
    // isset = untuk mengetahui/mengecek apakah sebuah variabel sudah dibikin atau belum. isset ini akan menghasilkan bulean(true/false)
    // empty = untuk mengetahui apakah variabel yang ada kosong atau tidak
    // die = untuk memberhentikan program
    // sleep = untuk memberhentikan sementara
?>