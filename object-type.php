<?php

class Produk
{
    public $judul, $pengarang, $penerbit, $tTerbit, $harga;

    public function __construct($judul = "judul", $pengarang = "pengarang", $penerbit = "penerbit", $tTerbit = "Tahun terbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tTerbit = $tTerbit;
        $this->harga = $harga;
    }
    public function getlabel()
    {
        return "$this->pengarang penerbit $this->penerbit";
    }
}

$buku1 = new Produk("Atomic Habit", "James Clear", "tidak tahu", "2018", 65000);
echo "Judul Buku : {$buku1->judul} Label {$buku1->getlabel()}, Tahun Terbit {$buku1->tTerbit}" . PHP_EOL;

class CetakBuku
{
    public function cetak(Produk $buku)
    {
        $str = "Judul Buku : {$buku->judul} | Label Buku : {$buku->getlabel()} | Tahun Terbit {$buku->tTerbit} | Harga {$buku->harga}";
        return $str;
    }
}

$cetakBuku1 = new CetakBuku();
echo $cetakBuku1->cetak($buku1);
