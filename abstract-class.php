<?php
// Membuat class abstract
abstract class Produk
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

    abstract public function CetakInfoProduk();

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

    public function cetakInfoProduk()
    {
        $str = "Buku | " . $this->cetakInfo() . " - {$this->jumlahHalaman} Halaman";
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

    public function cetakInfoProduk()
    {
        $str = "Game | " . $this->cetakInfo() . " ~ {$this->waktuMain} ";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK<br>";

        foreach ($this->daftarProduk as $p ) {
            $str .= "- {$p->cetakInfoProduk()} <br>";
        }

        return $str;
    }
}


$buku1 = new Buku("Atomic Habit", "James Clear", "Gramedia", 65000, 365);
$game1 = new Game("God of War", "Tidak tau", "Sony Computer", 300000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($buku1);
$cetakProduk->tambahProduk($game1);
echo $cetakProduk->cetak();