<?php
echo "--- BASIC IF STATEMENT ---";
echo "<br>";
$nilai = 75;
if ($nilai >= 70) {
    echo "Selamat! Anda lulus.";
} else {
    echo "Maaf, Anda belum lulus.";
}
?>

<?php
echo "<br>";
$angka = 9;
if ($angka % 2 == 0) {
    echo "$angka adalah angka genap.";
} else {
    echo "$angka adalah angka ganjil.";
}
?>

<?php
echo "<br>";
$tahun = 2023;
if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
    echo "$tahun adalah tahun kabisat.";
} else {
    echo "$tahun bukan tahun kabisat.";
}
?>

<?php
echo "<br> <br>";
echo "--- NESTED IF STATEMENT ---";
echo "<br>";
$nilai = 80;
$absensi = 35;
if ($nilai >= 70) {
    if ($absensi >= 75) {
        echo "Selamat! Anda lulus.";
    } else {
        echo "Maaf, Anda belum lulus karena absensi kurang.";
    }
} else {
    echo "Maaf, Anda belum lulus.";
}
