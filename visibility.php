<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit;
    protected $diskon;
    private $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "
                    penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class komik extends Produk {
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "
    penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;      
    }

    public function getInfoProduk() {
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $wktMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "
    penerbit", $harga = 0, $wktMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function setDiskon( $diskon = "0" ) {
        $this->diskon = $diskon;
    }
    
    public function getInfoProduk() {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->wktMain} jam.";
        return $str;
    }
}

$produk1 = new komik("naruto", "masashi kishimoto", "jepang", 40000, 100);
$produk2 = new Game("downhill", "febri", "amerika", 40000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(78);
echo $produk2->getHarga();


?>