<?php


use Produk as GlobalProduk;

class Produk
{
    public $judul,
        $penulis,
        $penerbit;
    protected $diskon = 0;

    protected $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "{$this->penulis} , {$this->penerbit}";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

// Inheritance
class Buku extends Produk
{
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk()
    // Overriding
    {
        $str = "Buku : {$this->judul} | " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}

class Game extends GlobalProduk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Buku("Atomic Habit", "James Clear", "Gramedia", 70000, 351);
$produk2 = new Game("God of War", "Cory Barlog", "Sony Computer", 100000, 55);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(10);
echo $produk2->getHarga();
