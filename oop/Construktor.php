<?php 

class produk{
    public $judul, $penulis, $penerbit, $harga;
    
    //public function __constructor($judul = 'judul', $penulis = 'penulis', $harga = 0)
    public function __construct($judul, $penulis, $penerbit, $harga = 0){
        //echo "hello";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
       // return $this->judul . ', ' . $this-> penulis;
    }
}
$produk1 = new produk("naruto", "masashi kishimoto","republik", 10000);
$produk2 = new produk("Faisal", "coding", "Erlangga", 1000000);


// var_dump($produk1);
// var_dump($produk2);

echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();
?>