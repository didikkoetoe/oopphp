<?php

// Membuat class
class Buku
{
    public $judul = "judul",
        $pengarang = "pengarang",
        $penerbit = "penerbit",
        $tTerbit = 1980;
    public function sayHallo()
    {
        return "Hello World!";
    }
}

// Cara inisiasi class
// $produk1 = new Buku();
// $produk1->judul = "the 7 Habits of Highly Effective People";
// $produk1->pengarang = "Stepehen R Covey";
// $produk1->penerbit = "Covey Leadership Center";
// var_dump($produk1);
// Di atas menampilkan object dengan var_dump

// Menampilkan object dengan echo
$buku1 = new Buku();
$buku1->judul = "Atomic Habit";
$buku1->pengarang = "James Clear";
$buku1->penerbit = "tidak tahu";

echo "judul : $buku1->judul ,<br>Pengarang : $buku1->pengarang";
echo "<br>";
echo $buku1->sayHallo();
