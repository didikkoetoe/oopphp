<?php

class Produk
{
    private $judul,
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

    // setter dan getter
    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbi()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "{$this->penulis} , {$this->penerbit}";
    }

    public function cetakInfo()
    {
        $str = "Judul : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

class Buku extends Produk
{
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function cetakInfo()
    {
        $str = "Buku | " . parent::cetakInfo() . " - {$this->jumlahHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function cetakInfo()
    {
        $str = "Game | " . parent::cetakInfo() . " ~ {$this->waktuMain} ";
        return $str;
    }
}

$buku1 = new Buku("Atomic Habit", "James Clear", "Gramedia", 65000, 365);
echo $buku1->cetakInfo();
echo "<br>";
$buku1->setDiskon(30);
echo $buku1->getHarga();
echo "<br>";
echo $buku1->getPenulis();
echo "<br>";
echo "Penerbit {$buku1->getPenerbi()}";
