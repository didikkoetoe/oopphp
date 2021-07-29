<?php namespace App\Produk; 

/**
 * Abstract Class Produk
 */
abstract class Produk
{
	protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

	function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel()
	{
		return "$this->penulis , $this->penerbit";
	}

	abstract public function info();
}

?>