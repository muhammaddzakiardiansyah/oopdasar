<?php

 class Produk {
    // property

    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0,
           $jmlHalaman = 0,
           $thnDitulis = 0;

    // method

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $thnDitulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->thnDitulis = $thnDitulis;
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
     public function getInfoProduk() {
        $str = "Biografi : {$this->judul} | {$this->getProduk()} (Rp.{$this->harga}) - {$this->jmlHalaman} halaman.";
        return $str;
     }
 }

 class Biodata extends Produk {
    public function getInfoProduk() {
        $str = "Biodata : {$this->judul} | {$this->getProduk()} (Rp.{$this->harga}) - ditulis pada tahun {$this->thnDitulis}";
        return $str;
    }
 }



 class Coba {
    public function cacak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getProduk()}";
        return $str;
    }
 }

 class infoProduk {
    public function cetak( ) {
         $isi = "{$this->judul} | {$this->penulis} (Rp.{$this->harga})";
         return $isi;
    }
 }

 $produk1 = new Biografi('KH Hasyim asyari','KH Wahid hasyim','Pekalongan group',50000, 100, 0);

 $produk2 = new Biodata('KH Ahmad dahlan','Tidak diketahui','Pekalongan group',50000, 0, 1950);


//  $infoProduk = new infoProduk();
//  $coba = new Coba();


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";


// echo $coba->cacak($produk1);


//  echo "Biografi : ".$produk1->getProduk();
//  echo "<br>";
//  echo "Biografi : ".$produk2->getProduk();
//  echo "<br>";
//  echo $infoProduk->cetak($produk2);











?>