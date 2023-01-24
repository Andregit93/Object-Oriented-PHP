<?php

use Produk as GlobalProduk;

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penerbit";
    }
}

$produk1 = new Produk("naruto", "masashi kishimoto", "jepang", 40000);
$produk2 = new Produk("downhill", "", "", 40000);


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";
var_dump($produk2);


?>