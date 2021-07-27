<?php

// use Produk as GlobalProduk;

// class Produk
// {
//     public static $angka = 1;

//     public static function sayHaloo()
//     {
//         return "Hallo World " . self::$angka++ . " Kali";
//     }
// }

// echo GlobalProduk::$angka;
// echo "<br>";
// echo Produk::sayHaloo();
// echo "<hr>";
// echo Produk::sayHaloo();

// * Membernya (property dan method) terikat dengan class , bukan dengan object
// * Nilai static akan selalu tetap
// * Membuat kode menjadi procedural
// * Biasanya digunakan untuk membuat fungsi bantuan atau helper
class Contoh
{
    public static $angka = 1;

    public function sayHallo()
    {
        return "Say Hallo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->sayHallo();
echo $obj->sayHallo();
echo $obj->sayHallo();

echo "<hr>";

$obj2 = new Contoh();
echo $obj->sayHallo();
echo $obj->sayHallo();
