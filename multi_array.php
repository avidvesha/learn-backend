<?php
$buku = array(
    array("PHP for Beginners", 120, "John Doe"),
    array("Web Design 101", 90, "Jane Smith"),
    array("JavaScript Mastery", 150, "Sam Jones"),
);

// Mengakses nilai array multidimensional
echo $buku[0][0] . " ditulis oleh " . $buku[0][2] . ", harganya $" . $buku[0][1] . "<br>";
echo $buku[1][0] . " ditulis oleh " . $buku[1][2] . ", harganya $" . $buku[1][1] . "<br>";
echo $buku[2][0] . " ditulis oleh " . $buku[2][2] . ", harganya $" . $buku[2][1] . "<br>";
