<?php 

class produk{
    public $judul, $penulis, $penerbit, $harga;

    public function getlabel(){
        return $this->judul . ', ' . $this-> penulis;
    }
}
$produk1 = new produk();
$produk1 -> judul = "Naruto";
$produk1 -> penulis = "masashi kishimoto";

$produk1 = new produk();
$produk2 -> judul = "Uncharted";
$produk2 -> penulis = "Agus";

// var_dump($produk1);
// var_dump($produk2);

echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();
?>