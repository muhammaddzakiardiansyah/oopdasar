<?php

 class Produk {
    // property

    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // method

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getProduk() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getProduk()} (Rp.{$this->harga})";
        return $str;
    }

 }
 
 class Biografi extends Produk {
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }


     public function getInfoProduk() {
        $str = "Biografi : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";

        return $str;
     }
}

 class Biodata extends Produk {
    public $thnDitulis;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $thnDitulis = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->thnDitulis = $thnDitulis;

    }

    public function getInfoProduk() {
        $str = "Biodata : " . parent::getInfoProduk() . " - ditulis pada tahun {$this->thnDitulis}";

        return $str;
    }
 }

 class Tutorial extends Produk {
    public $part;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $part = 0) {
        parent::__construct($judul, $penulis, $penerbit,$harga);

        $this->part = $part;
    }



    public function getInfoProduk() {
        $str = "Tutorial : " . parent::getInfoProduk() . " - {$this->part} part.";

        return $str;
    }

 }



//  class Coba {
//     public function cacak( Produk $produk ) {
//         $str = "{$produk->judul} | {$produk->getProduk()}";
//         return $str;
//     }
//  }

//  class infoProduk {
//     public function cetak( ) {
//          $isi = "{$this->judul} | {$this->penulis} (Rp.{$this->harga})";
//          return $isi;
//     }
//  }

 $produk1 = new Biografi('KH Hasyim asyari','KH Wahid hasyim','Pekalongan group',50000, 100);

 $produk2 = new Biodata('KH Ahmad dahlan','Tidak diketahui','Pekalongan group',50000, 1950);

 $produk3 = new Tutorial('Learning php','M.Dzaki ardiansyah','Youtube',90000,17);


//  $infoProduk = new infoProduk();
//  $coba = new Coba();


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();


// echo $coba->cacak($produk1);


//  echo "Biografi : ".$produk1->getProduk();
//  echo "<br>";
//  echo "Biografi : ".$produk2->getProduk();
//  echo "<br>";
//  echo $infoProduk->cetak($produk2);











?>