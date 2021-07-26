<?php

// Inheritance problem
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "{$this->penulis} , {$this->penerbit}";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if ($this->tipe == "Buku") {
            $str .= " - {$this->jumlahHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

$produk1 = new Produk("Atomic Habit", "James Clear", "Gramedia", 70000, 351, 0, "Buku");
$produk2 = new Produk("God of War", "Cory Barlog", "Sony Computer", 100000, 0, 55, "Game");
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
