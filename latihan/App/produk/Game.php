<?php namespace App\produk;

/**
 * inheritance dari class Produk dan implements dari interface CetakProduk
 */
class Game extends Produk implements CetakProduk
{
	public $jamMain;

	function __construct($judul = "judul", $penulis='penulis', $penerbit='penerbit' , $harga = 0, $jamMain = 0)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jamMain = $jamMain;
	}

	public function getInfo()
	{
		$str = "Game | Judul -> {$this->judul} , Penerbit -> {$this->penerbit}<br>Harga = Rp.{$this->harga} , ~{$this->jamMain} Jam.";

		return $str;
	}

	public function cetak()
	{
		$str = "--Cetak Produk--" . "<br>" . self::getInfo();
		return $str;
	}
}