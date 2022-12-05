<?php

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