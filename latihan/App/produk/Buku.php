<?php namespace App\produk;

/**
 * inheritance dari abstract class Produk
 */
class Buku extends Produk implements CetakProduk
{
	public $jmlHalaman;
	function __construct($judul = 'judul' , $penulis = 'penulis' , $penerbit = 'penerbit' , $harga = 0, $jmlHalaman = 0 )
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo()
	{
		$str = "Buku | Judul -> {$this->judul} , Penerbit -> {$this->penerbit}<br>Harga = Rp.{$this->harga} , -{$this->jmlHalaman} Halaman.";
		return $str;
	}

	public function cetak()
	{
		$str = "--Cetak Produk--" . "<br>" . self::getInfo();
		return $str;
	}

}