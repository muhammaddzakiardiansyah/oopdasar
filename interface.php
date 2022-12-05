<?php
  
  interface InfoProduk {
     public function getInfoProduk(); 
  }



  abstract class Produk {
    // property

    protected   $judul,
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
    
    abstract public function getInfo();
     
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
 
 class Biografi extends Produk implements InfoProduk {
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getProduk()} (Rp.{$this->getHarga()})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Biografi : " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";

        return $str;
     }

} // akhiran class biografi

 class Biodata extends Produk implements InfoProduk {
    public $thnDitulis;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $thnDitulis = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->thnDitulis = $thnDitulis;

    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getProduk()} (Rp.{$this->getHarga()})";
        return $str;
    }
 
    public function getInfoProduk() {
        $str = "Biodata : " . $this->getInfo() . " - ditulis pada tahun {$this->thnDitulis}";

        return $str;
    }

 } // akhiran class biodata

 class Tutorial extends Produk implements InfoProduk {
    public $part;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $part = 0) {
        parent::__construct($judul, $penulis, $penerbit,$harga);

        $this->part = $part;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getProduk()} (Rp.{$this->getHarga()})";
        return $str;
    }


    public function getInfoProduk() {
        $str = "Tutorial : " . $this->getInfo() . " - {$this->part} part.";

        return $str;
    }

 } // akhiran class tutorial

 class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk) {
       return $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "Daftar Produk : <br>";

        foreach( $this->daftarProduk as $produk ) {
            $str .= "- {$produk->getInfoProduk()} <br>";
        }
        return $str;
    }
 }



 $produk1 = new Biografi('KH Hasyim asyari','KH Wahid hasyim','Pekalongan group',50000, 100, 50);

 $produk2 = new Biodata('KH Ahmad dahlan','Tidak diketahui','Pekalongan group',50000, 1950);

 $produk3 = new Tutorial('Learning php','M.Dzaki ardiansyah','Youtube',90000,17);

 $infoproduk = new CetakInfoProduk();
 $infoproduk->tambahProduk($produk1);
 $infoproduk->tambahProduk($produk2);
 $infoproduk->tambahProduk($produk3);
 echo $infoproduk->cetak();











?>