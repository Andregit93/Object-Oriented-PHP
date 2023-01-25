<?php 

require_once 'App/init.php';

$produk1 = new Komik("naruto", "masashi kishimoto", "jepang", 40000, 100);
$produk2 = new Game("downhill", "febri", "amerika", 40000, 50);

$obj = new cetakInfoProduk;
$obj->tambahProduk( $produk1 );
$obj->tambahProduk( $produk2 );
echo $obj->cetak();