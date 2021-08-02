<?php namespace App\produk;

/**
 * Class absctract Produk
 */
abstract class Produk
{
	protected $judul, $penulis, $penerbit, $harga, $diskon = 0;
	
	public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0 ,)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	abstract public function getInfo();

	public function getJudul()
	{
		return $this->judul;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
	}

	public function getHarga()
	{
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
}