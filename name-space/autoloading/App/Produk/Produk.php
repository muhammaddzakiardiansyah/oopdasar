<?php

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