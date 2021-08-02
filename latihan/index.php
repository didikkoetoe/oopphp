<?php 

require_once 'App/init.php';

$buku1 = new App\produk\Buku("Atomic Habit" , "James Clear" , "Gramedia" , 70000 , 350);
$buku1->setDiskon(50);
echo $buku1->cetak();
echo "<br>";
echo "Harga Bukunya sekarang menjadi " . $buku1->getHarga();
echo "<hr>";
$game1 = new App\produk\Game("God of War" , "I dont know" , "Sony Entertainment" , 200000 , 60);
echo $game1->cetak();
?>