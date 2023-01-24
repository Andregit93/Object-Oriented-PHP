<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $wktMain,
    $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "
                    penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoLengkap() {
        // Komik : Naruto | mashasi kishimoto, Jepang (Rp. 30000) - 100 halaman.
        // Game : Downhill | Febri, Amerika (Rp. 20000) ~ 50 jam.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe ==  "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ( $this->tipe == "Game" ) {
            $str .= " ~ {$this->wktMain} Jam.";
        }
        return $str;
    }
}


$produk1 = new Produk("naruto", "masashi kishimoto", "jepang", 40000, 100, 0, "Komik");
$produk2 = new Produk("downhill", "febri", "amerika", 40000, 0, 50, "Game");

echo $produk1->getinfoLengkap();
echo "<br>";
echo $produk2->getinfoLengkap();
?>