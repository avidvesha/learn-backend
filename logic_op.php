<?php
$benar = true;
$salah = false;

$logikaAND = $benar && $salah; // Logika AND
$logikaOR = $benar || $salah; // Logika OR
$logikaNOT = !$benar; // Logika NOT

echo "Logika AND: " . ($logikaAND ? 'Ya' : 'Tidak') . "<br>";
echo "Logika OR: " . ($logikaOR ? 'Ya' : 'Tidak') . "<br>";
echo "Logika NOT: " . ($logikaNOT ? 'Ya' : 'Tidak') . "<br>";
