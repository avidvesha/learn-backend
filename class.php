<?php

namespace Kendaraan; // tambahkan namespace

class Mobil
{
    public $warna;
    public $merk;

    public function __construct($warnaMobil, $merkMobil)
    {
        $this->warna = $warnaMobil;
        $this->merk = $merkMobil;
    }

    public function gas()
    {
        echo "Mobil maju";
    }

    public function rem()
    {
        echo "Mobil berhenti";
    }
}

// $mobil = new Mobil(); // membuat objek lalu disimpan ke variabel $mobil

// $mobil->warna = "Silver"; // set properti warna
// $mobil->merk = "BMW"; // set properti merk

$mobil = new Mobil("Black", "Porsche");

echo "Mobil saya warna " . $mobil->warna;
echo "<br>";
echo "Mobil saya merk " . $mobil->merk;
echo "<br>";

$mobil->gas(); // panggil method gas()
echo "<br>";
$mobil->rem(); // panggil method rem()
