<?php
// Interface


interface CetakInfoProduk
{
    public function Cetak();
}

// Class Abstract
abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "{$this->penulis} , {$this->penerbit}";
    }

    abstract public function info();
}

class Buku extends Produk implements CetakInfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function Cetak()
    {
        $str = "Buku | {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function info()
    {
        $str = "Buku | Judul : {$this->judul}";
        return $str;
    }
}

class Game extends Produk implements CetakInfoProduk
{
    public $jamMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jamMain = $jamMain;
    }

    public function Cetak()
    {
        $str = "Game | {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jamMain} Jam.";
        return $str;
    }

    public function info()
    {
        $str = "Game | Judul : {$this->judul}";
        return $str;
    }
}

class CetakProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "--CETAK PRODUK--<br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->Cetak()} <br>";
        }
        return $str;
    }
}

$buku1 = new Buku("Atomic Habit", "James Clear", "Gramedia", 70000, 370);
// Cetak
// $cetakBuku = new CetakProduk();
// $cetakBuku->tambahProduk($buku1);
// echo $cetakBuku->cetak();
echo $buku1->Cetak();
echo "<br>";
$cetakProduk = new CetakProduk();
$cetakProduk->tambahProduk($buku1);
echo $cetakProduk->cetak();
