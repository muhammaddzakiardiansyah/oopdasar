<?php

class Produk {
//   property
   public $judul = "judul",
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga = 0;

//  method

   public function getLabel() {
       return "$this->judul, $this->harga";
   }

}
// contoh property

// $produk = new Produk();
// $produk -> judul = "kh hasyim asyari";
// var_dump($produk);
// echo "<br><br>";
// $produk2 = new Produk();
// $produk2 -> penulis = "kh wahid hasyim";
// var_dump($produk2 -> penulis);

// $produk3 = new Produk();
// $produk3->judul = "KH Hasyim asyari";
// $produk3->penulis = "KH Wahid hasyim";
// $produk3->penerbit = "Pekalongan Group";
// $produk3->harga = 50000;
// // var_dump($produk3);
// $produk4 = new Produk();
// $produk4->judul = "Clash of clans";
// $produk4->penulis = "gatau";
// $produk4->penerbit = "gatau";
// $produk4->harga = 5000000;

// echo "Buku biografi $produk3->judul ditulis oleh $produk3->penulis dan diterbitkan oleh $produk3->penerbit dijual dengan harga $produk3->harga";

// contoh method
echo "biografi : ".$produk3->getLabel();
echo "<br>";
echo "Game : ".$produk4->getLabel();
