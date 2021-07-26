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
$produk2 = new Produk("the 7 Habits of Highly Effective People", "Stephen R Covey", "Covey Leadership Center", 80000);
echo "Judul : {$produk1->judul} | Label : {$produk1->getLabel()} | Harga : {$produk1->harga}";
echo "<br>";
echo "Judul : {$produk2->judul} | Penulis dan penerbit : {$produk2->getLabel()} | Harga : ( Rp. {$produk2->harga})";

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "Judul : {$produk->judul} | Penulis : {$produk->penulis} | Penerbit : {$produk->penerbit} | Harga : Rp. {$produk->harga}.";
        return $str;
    }
}

echo "<br>";
$cetakProduk1 = new CetakInfoProduk();
echo $cetakProduk1->cetak($produk1);
