<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/cetakInfoProduk.php';

spl_autoload_register( function( $class ) {
    require_once __DIR__. '/Produk/'. $class . '.php';
} );

?>