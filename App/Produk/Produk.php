<?php 

abstract class Produk{
	
	protected $judul, $penulis, $penerbit , $harga, $diskon = 0;

	public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getJudul()
	{
		return $this->judul;
	}

	public function setJudul( $judul )
	{
		$this->judul = $judul;
	}

	public function getPenulis()
	{
		return $this->penulis;
	}

	abstract public function cetak();

	public function getInfo()
	{
		return "{$this->penulis} , {$this->penerbit}";
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}
}
