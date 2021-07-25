<?php

// Membuat class
class Buku
{
    public $judul = "judul",
        $pengarang = "pengarang",
        $penerbit = "penerbit",
        $tTerbit = 1980;
}

// Cara inisiasi class
$produk1 = new Buku();
$produk1->judul = "the 7 Habits of Highly Effective People";
$produk1->pengarang = "Stepehen R Covey";
$produk1->penerbit = "Covey Leadership Center";
var_dump($produk1);
