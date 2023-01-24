<?php 
class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function getLabel() {
        return "$this->judul, $this->harga";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "mashasi kishimoto";
$produk1->penerbit = "Jepang";
$produk1->harga = 30000;


// $produk2 = new Produk();
// $produk2->judul = "downhill";
// $produk2->penulis = "febri";
// $produk2->penerbit = "amerika";
// $produk2->harga = 20000;
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "smackdown";
$produk3->penulis = "dimas";
$produk3->penerbit = "jepang";
$produk3->harga = 30000;

echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk3->getLabel();


?>