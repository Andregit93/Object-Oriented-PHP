<?php 

// class contohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo ". self::$angka++ ." kali.";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

class Contoh {
    public static $angka = 1;
    
    public static function halo() {
        return "halo ". self::$angka++ ." kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();


?>