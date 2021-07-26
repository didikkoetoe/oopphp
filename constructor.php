<?php

// Constructor method
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel()
    {
        return "$this->penulis , $this->penerbit";
    }
}

$produk1 = new Produk("Atomic Habit", "James Clear", "Gramedia", 65000);
echo "Judul : {$produk1->judul} | Label : {$produk1->getLabel()} | Harga : {$produk1->harga}";
