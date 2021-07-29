<?php 

require_once 'App/init.php';

$produk1 = new Buku("Atomic Habit" , "james Clear" , "Gramedia" , 67000 , 100);
echo $produk1->cetak();

?>