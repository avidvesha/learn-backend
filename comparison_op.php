<?php
$angka1 = 10;
$angka2 = 5;

$lebihBesar = $angka1 > $angka2; // Lebih besar dari
$kurangDari = $angka1 < $angka2; // Kurang dari
$samaDengan = $angka1 == $angka2; // Sama dengan

echo "Lebih besar dari: " . ($lebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Kurang dari: " . ($kurangDari ? 'Ya' : 'Tidak') . "<br>";
echo "Sama dengan: " . ($samaDengan ? 'Ya' : 'Tidak') . "<br>";
