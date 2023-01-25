<?php 

class Game extends Produk implements InfoProduk {
    public $wktMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "
    penerbit", $harga = 0, $wktMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getInfo()  {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    
    public function getInfoProduk() {
        $str = "Game : ". $this->getInfo() ." ~ {$this->wktMain} jam.";
        return $str;
    }
}