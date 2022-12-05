<?php

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