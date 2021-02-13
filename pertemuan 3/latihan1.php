<?php
/*
Febrian Fauzan Rachman
203040057
https://github.com/mpeb1502/pw2021_203040057
Pertemuan 3 - 12 Februari 2021
Mempelajari mengenai Struktur kendali - PHP
*/
?>


<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

//for ( $i = 0; $i < 5; $i++ ) {
//    echo "Hello Febrian! <br>";
// }

// $i = 0;
// while ( $i < 5 ) {
//     echo "Hello Febrian! <br>";
//  $i++;
// }

// $i = 10;
// do {
//     echo "Hello Febrian! <br>";
// $i++;
// } while( $i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
    .warna-baris {
        background-color: yellow
    }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <!-- penulisan gaya templeting -->
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 0 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
        <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j"; ?> </td>
                <?php endfor; ?>
            </tr>
    <?php endfor; ?>
 
        
    
</table>

</body>
</html>