<?php 

/**
 * inheritance dari class Produk untuk Game
 */
class Game extends Produk implements CetakProduk
{
	protected $jamMain;
	
	function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0 , $jamMain)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jamMain = $jamMain;
	}

	public function info()
	{
		$str = "Game | Judul : {$this->judul}, {$this->getLabel()} , (Rp. {$this->harga}), ~{$this->jamMain} jam";
		return $str;
	}

	public function cetak()
	{
		$str = "--Cetak Produk--<br>" . self::info() . "<br>";
		return $str;
	}
}

?>
