    <?php
    /*
Nama : Febrian Fauzan Rachman
Kelas : B
NRP : 203040057
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

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- font css -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylee.css">


        <title>Manchester United</title>
    </head>

    <body>
        <!-- navbar -->
        <section id="mu">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="https://www.manutd.com/">Manchester United</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="profile me/index.html">Profile Me <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kuliah">Kuliah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#praktikum">Praktikum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tubes">Tugas Besar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!-- akhir navbar -->


        <!-- jumbotron -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/squad1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/stadion1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/baju1.jpg" alt="Third slide">
                </div>
            </div>
        </div>

        <!-- akhir jumbotron -->

        <!-- kuliah -->
        <section id="kuliah">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <div class="kuliah text-center">
                            <h2>Kuliah</h2>

                            <div class="card text-center">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"> <a href="kuliah/pertemuan10/latihan3.php"> Pertemuan 10</a></li>
                                    <li class="list-group-item"><a href="kuliah/pertemuan11"> Pertemuan 11</a></li>
                                    <li class="list-group-item"><a href="kuliah/pertemuan12"> Pertemuan 12</a></li>
                                    <li class="list-group-item"><a href="kuliah/pertemuan13"> Pertemuan 13</a></li>
                                </ul>
                            </div>
        </section>
        </div>
        </div>
        </div>
        </div>
        <!-- akhir kuliah -->

        <!-- Praktikum -->
        <section id="praktikum">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <div class="praktikum text-center">
                            <h2>Praktikum</h2>

                            <div class="card text-center">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="praktikum/tugas1/Tugas1.php"> Pertemuan 1</a></li>
                                    <li class="list-group-item"><a href="praktikum/tugas2/Latihan2d.php"> Pertemuan 2</a></li>
                                    <li class="list-group-item"><a href="praktikum/tugas3/Latihan3d.php"> Pertemuan 3</a></li>
                                    <li class="list-group-item"><a href="praktikum/tugas4/Latihan4c/index.php"> Pertemuan 4</a></li>
                                    <li class="list-group-item"><a href="praktikum/tugas5/Latihan5e/index.php"> Pertemuan 5</a></li>
                                    <li class="list-group-item"><a href="praktikum/tugas6/latihan6c/index.php"> Pertemuan 6</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir Praktikum -->

        <!-- Tubes -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4">
                    <div class="tubes text-center">
                        <h2>Tugas Besar</h2>
                        <section id="tubes"></section>
                        <div class="card text-center">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <a href="tubes/index.php"> Tugas Besar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir Tubes -->

        <!-- sponsor -->
        <section class="">
            <br><br>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-6 justify-content-center d-flex">
                    <figure class="figure">
                        <a href="https://www.adidas.co.id/"><img src="assets/img/adidas.png"></a>
                    </figure>
                    <figure class="figure">
                        <a href="https://www.aon.com/"><img src="assets/img/Aon.png"></a>
                    </figure>
                    <figure class="figure">
                        <a href="https://www.chevrolet.co.id//"><img src="assets/img/chevrolet.png"></a>
                    </figure>
                    <figure class="figure">
                        <a href="https://www.kohler.co.id/"><img src="assets/img/kohler.png"></a>
                    </figure>
                </div>
                < </section>
                    <!-- Akhir sponsor -->


                    <br><br>

                    <!-- footer -->
                    <footer>
                        <a href="#mu"><img class="footer-img" src="assets/img/footer.jpg"></a>
                        <div class="row-footer">
                            <div class="col text-center">
                                <p>2021 Index Febrian Fauzan Rachman</p>
                                <br>
                            </div>
                        </div>
                    </footer>
                    <!-- akhir footer -->



                    <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    </body>

    </html>