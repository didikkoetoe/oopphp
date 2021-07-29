<?php 

class Game
{
	public $jamMain = 0;

	public function __construct($judul = "judul", $penulis ="penulis" , $penerbit="penerbit", $harga=0, $jamMain=0)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jamMain = $jamMain;
	}

	public function cetak()
	{
		$str = "Game | {$this->judul} | Label : {$this->getInfo()} (Rp.{$this->harga}) -{$this->jamMain} Jam";
	}

	public function getLabel()
	{
		return "{$this->penulis} , {$this->penerbit}";
	}

}

   ?>