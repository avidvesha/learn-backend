<?php

class Binatang
{
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function infoBinatang()
    {
        echo "Nama: {$this->nama}, Jenis: {$this->jenis}";
    }
}

class Kucing extends Binatang
{
    public $suara;

    public function __construct($nama, $jenis, $suara)
    {
        // memanggil construct milik parent dalam hal ini agar properti yang diwariskan memiliki nilai
        parent::__construct($nama, $jenis); // panggil fungsi constructor milik parent
        $this->suara = $suara;
    }

    public function suaraKucing()
    {
        echo "Kucing saya namanya {$this->nama} suaranya {$this->suara}";
    }
}
