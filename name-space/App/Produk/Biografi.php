<?php

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