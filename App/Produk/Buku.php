<?php 

/**
 * Class untuk membuat produk buku
 */
class Buku extends Produk
{

	public $jmlHalaman = 0;
	
	function __construct($judul = "judul" , $penulis="penulis" , $penerbit="penerbit" , $harga="harga", $jmlHalaman=0)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman;
	}

	public function cetak()
	{
		$str = "Buku | {$this->judul} | Label : {$this->getInfo()} (Rp.{$this->harga}) -{$this->jmlHalaman} Halaman";
	}
}

?>