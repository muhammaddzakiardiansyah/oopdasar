<?php

 class Produk {
    // property

    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;

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
        $str = "{$this->judul} | {$this->getProduk()} (Rp.{$this->getHarga()})";
        return $str;
    }
    public function getDiskon() {
        return $this->diskon;
    }
    public function setDiskon( $diskon ) {
        return $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getJudul() {
        return $this->judul;
    }
    public function setJudul( $judul ) {
        if( !is_string($judul) ) {
            throw new Exception("Judul harus string");
        }
        return $this->judul = $judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }
    public function setPenulis( $penulis ) {
        return $this->penulis = $penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }
    public function setPenerbit( $penerbit ) {
        return $this->penerbit = $penerbit;
    }

 } // akhiran class produk
 
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
} // akhiran class biografi

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

 } // akhiran class biodata

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

 } // akhiran class tutorial



 $produk1 = new Biografi('KH Hasyim asyari','KH Wahid hasyim','Pekalongan group',50000, 100);

 $produk2 = new Biodata('KH Ahmad dahlan','Tidak diketahui','Pekalongan group',50000, 1950);

 $produk3 = new Tutorial('Learning php','M.Dzaki ardiansyah','Youtube',90000,17);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk3->setJudul("Learning javascript");
echo $produk3->getJudul();
echo "<br>";
echo $produk2->getJudul();











?>