<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/cetakInfoProduk.php';
// require_once 'Service/User.php';
// require_once 'Produk/User.php';

spl_autoload_register( function( $class ) {
    $class = explode("\\", $class );
    $class = end($class);
    require_once __DIR__. '/Produk/'. $class . '.php';
} );

spl_autoload_register( function( $class ) {
    $class = explode("\\", $class );
    $class = end($class);
    require_once __DIR__. '/Service/'. $class . '.php';
} );

?>