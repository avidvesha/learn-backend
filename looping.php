<?php
echo "--- FOR LOOP STATEMENT ---";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    echo "Pelatihan ke-$i di AMCC! <br>";
}
?>

<?php
echo "<br>";
echo "--- WHILE LOOP STATEMENT ---";
echo "<br>";

$counter = 1;
while ($counter <= 3) {
    echo "Percobaan ke-$counter: Menemukan Harta Karun PHP! <br>";
    $counter++;
}

?>

<?php
echo "<br>";
echo "--- DO WHILE LOOP STATEMENT ---";
echo "<br>";

$no = 1;
do {
    echo "Langkah ke-$no untuk menjadi sepuh PHP! <br>";
    $no++;
} while ($no <= 10);

?>

<?php
echo "<br>";
echo "--- FOREACH LOOP STATEMENT ---";
echo "<br>";

$fruits = [
    "Apel",
    "Durian",
    "Semangka",
    "Jeruk",
    "Alupkat",
    "Durian",
    "Leci",
];
echo "<h5>Daftar Buah:</h5>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";
