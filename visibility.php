<?php
class Profile
{
    public $nama;
    protected $nim;

    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    private function sayHello()
    {
        echo "Halo nama saya " . $this->nama;
    }
}

class Mahasiswa extends Profile
{
    public function __construct($nama, $nim)
    {
        parent::__construct($nama, $nim);
    }

    public function ambilNIM()
    {
        // mengakses properti dari dalam class
        return $this->nim;
    }
    public function panggilMethodSayHello()
    {
        // kita mencoba memanggil method milik parent
        $this->sayHello();
    }
}

$bobi = new Mahasiswa("Bobi", "23.99.9999");
echo $bobi->nama; // tampilan nama sebelum diubah
echo "<br>"; // <br> digunakan untuk membuat garis baru

$bobi->nama = "Bobi Vesha"; // mengubah nama diluar class

echo $bobi->nama; // tampilan nama setelah diubah
echo "<br>";

echo $bobi->ambilNIM();
echo "<br>";

echo $bobi->panggilMethodSayHello();
