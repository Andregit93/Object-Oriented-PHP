<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $wktMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "
                    penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoLengkap() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class komik extends Produk {
    public function getInfoKomik() {
        $str = "Komik : {$this->getinfoLengkap()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoGame() {
        $str = "Game : {$this->getinfoLengkap()} ~ {$this->wktMain} jam.";
        return $str;
    }
}



$produk1 = new komik("naruto", "masashi kishimoto", "jepang", 40000, 100, 0,);
$produk2 = new Game("downhill", "febri", "amerika", 40000, 0, 50);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();

?>