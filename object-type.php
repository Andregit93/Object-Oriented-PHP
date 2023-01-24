<?php

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
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduk {
    public function cetak( Produk $produk ) {
        $prd1 = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $prd1;
    }
}

$produk1 = new Produk("naruto", "masashi kishimoto", "jepang", 40000);
$produk2 = new Produk("downhill", "febri", "amerika", 40000);


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";

$cetakProduk1 = new cetakInfoProduk();
echo $cetakProduk1->cetak($produk1);


?>