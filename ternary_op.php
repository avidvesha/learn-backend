<?php
echo "--- SWITCH STATEMENT ---";
echo "<br>";
echo "<br>";

echo "--- Contoh 1: Penentuan Nilai Variabel Berdasarkan Kondisi ---";
echo "<br>";
$umur = 13;
$status = ($umur >= 18) ? "Dewasa" : "Remaja";
echo "Status: $status";

echo "<br>";
echo "<br>";
echo "--- Contoh 2: Penggunaan Ternary Operator dalam Output HTML ---";
echo "<br>";
$role = 'user';
echo ($role == 'admin') ? "<h1>Selamat datang, Admin!</h1>" : "<h1>Selamat datang, Pengguna!</h1>";

echo "--- Contoh 3: Penggunaan Ternary Operator dalam Array ---";
echo "<br>";
$nilai = 35;
$grade = ($nilai >= 80) ? 'A' : (($nilai >= 70) ? 'B' : 'C');
echo "Grade: $grade";
