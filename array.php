<!-- how it works -->
<?php
$buah = array("Apel", "Jeruk", "Pisang");
echo "Saya suka makan " . $buah[0] . ", " . $buah[1] . ", dan " . $buah[2] . ".";
?>

<!-- how to make -->
<?php
echo "<br>";
echo "<br>";
$bulan = array("Januari", "Februari", "Maret");
// Atau versi pendeknya:
$hari = ["Senin", "Selasa", "Rabu"];

echo "Bulan favorit saya adalah " . $bulan[1] . ".";
echo "Hari favorit saya adalah " . $hari[0] . ".";
?>

<!-- how to modified -->
<?php
echo "<br>";
echo "<br>";
$hobi = array("Membaca", "Olahraga", "Traveling");

// Menambahkan item baru
$hobi[] = "Fotografi";

// Menghapus item kedua
unset($hobi[1]);

// Nge-print hasilnya
print_r($hobi);
