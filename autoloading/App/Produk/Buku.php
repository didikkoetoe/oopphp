<?php 

/**
 * inheritance dari class Produk
 */
class Buku extends Produk implements CetakProduk
{
	protected $jmlHalaman;

	function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0 , $jmlHalaman)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function info() {
		$str = "Buku | Judul : {$this->judul}, {$this->getLabel()} , (Rp. {$this->harga}), -{$this->jmlHalaman} Halaman. ";
		return $str;
	}

	public function cetak()
	{
		$str = "--Cetak Produk--<br>" . self::info() . "<br>";
		return $str;
	}
}

?>