<?php

// Inheritance problem

use Produk as GlobalProduk;

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
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
    public function getInfoProduk()
    {
        $str = "Buku : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}

class Game extends GlobalProduk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Buku("Atomic Habit", "James Clear", "Gramedia", 70000, 351, 0);
$produk2 = new Game("God of War", "Cory Barlog", "Sony Computer", 100000, 0, 55);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
