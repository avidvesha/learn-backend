<?php
echo "--- BUILT-IN FUNCTION ---";
echo "<br>";
echo "<br>";

echo "- PRINT() -";
echo "<br>";
$pesan = "Hello, Amikom!";
print($pesan);
echo "<br>";
echo "<br>";

echo "- STRLEN() -";
echo "<br>";
$kata = "Amikom Computer Club";
$panjang = strlen($kata);
echo "Panjang string: $panjang";
echo "<br>";
echo "<br>";

echo "- DATE() -";
echo "<br>";
$tanggal_sekarang = date("Y-m-d H:i:s");
echo "Waktu sekarang: $tanggal_sekarang";
echo "<br>";
echo "<br>";

echo "- STRTOLOWER() STRTOUPPER() -";
echo "<br>";
$teks = "Amikom Computer Club";
echo strtolower($teks); // Output: amikom computer club
echo "<br>";
echo strtoupper($teks); // Output: AMIKOM COMPUTER CLUB
echo "<br>";
echo "<br>";

echo "- EMPTY() -";
echo "<br>";
$hati = "1";
if (empty($hati)) {
    echo "Ga bosen sendiri mulu bang?";
} else {
    echo "Ciee udah ga jomblo lagi.";
}
echo "<br>";
echo "<br>";

echo "--- USER DEFINED FUNCTION ---";
echo "<br>";
echo "<br>";

echo "- PARAM and RETURN -";
echo "<br>";
function sapa($nama)
{
    return "Halo, $nama! Selamat datang di AMCC.";
}
// Memanggil fungsi
echo sapa("Fulan");
echo "<br>";
echo "<br>";

echo "- NO PARAM and NO RETURN -";
echo "<br>";
function sapaSemua()
{
    echo "Halo semuanya! Selamat datang di AMCC.";
}
// Memanggil fungsi tanpa parameter
sapaSemua();
echo "<br>";
echo "<br>";

echo "- WITH DEFAULT VALUE -";
echo "<br>";
function sapaDefault($nama = "Tamu")
{
    return "Halo, $nama! Selamat datang di PHP.";
}
// Memanggil fungsi tanpa menyediakan nilai
echo sapaDefault();
echo "<br>";
echo "<br>";

echo "- FLEX TOTAL OF PARAMs -";
echo "<br>";
function jumlahkan(...$angka)
{
    return array_sum($angka);
}
// Memanggil fungsi dengan parameter fleksibel
echo jumlahkan(1, 2, 3, 4, 5);
echo "<br>";
echo "<br>";

echo "- RETURNING OTHER FUNCTION -";
echo "<br>";
function kaliDua($angka)
{
    return $angka * 2;
}
function jumlahDua($angka)
{
    return $angka + 2;
}
// Menggabungkan fungsi sebagai nilai kembali
$hasil = jumlahDua(kaliDua(3));
echo $hasil;
echo "<br>";
