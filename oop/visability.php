<?php

class produk{
    private $judul, $penulis, $penerbit, $harga;
    
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
   //public function __construct($judul, $penulis, $penerbit, $harga = 0){
        //echo "hello";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getjudul(){
        return $this->judul;
       // return $this->judul . ', ' . $this-> penulis;
    }

    public function setjudul($judul){
       $this->judul = $judul;
        
    }
}

    class komik extends produk{
        public $jmlhalaman;

        public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0){
            //$this->judul = $judul;
            //$this->penulis = $penulis;
            //$this->penerbit = $penerbit;
            //$this->harga = $harga;
            //$this->jmlhalaman = $jmlhalaman;

            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlhalaman=$jmlhalaman;
        }  
        public function getinfoproduk(){
            $str = "komik :" . parent::getinfoproduk() . " - $this->jmlhalaman Halaman";
            return $str;
    }     
}

    class game extends produk{
        public $waktuMain;

        public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0){
            //$this->judul = $judul;
            //$this->penulis = $penulis;
            //$this->penerbit = $penerbit;
            //$this->harga = $harga;
            //$this->waktumain = $waktumain;

            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain=$waktuMain;
        }  
        public function getinfoproduk() {
            $str = "game :" . parent::getinfoproduk() . " - $this->waktuMain Jam";
            return $str;
    }     
}

    class cetakinfoproduk{
        public function cetak (produk $produk){
            $str =  "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga) - $produk->waktuMain Jam";
            return $str;
            //echo "$produk->judul";
        }
    }

// $produk1 = new komik("naruto", "masashi kishimoto","republik", 10000);
// $produk2 = new produk("Faisal", "coding", "Erlangga", 1000000);


// var_dump($produk1);
// var_dump($produk2);
$produk1->setjudul("dragon ball");
$produk1->judul = "Sinchan";
echo $produk1->getjudul();
echo "<br>";
// echo $produk2->getinfoproduk();
// echo "<br>"; 


// $infoproduk = new cetakinfoproduk();
// echo $infoproduk->cetak($produk1);
//echo "naruto | Mahasshi kishimoto"
?>