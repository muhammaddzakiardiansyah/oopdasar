<?php

require_once 'App/init.php';

$produk1 = new Biografi('KH Hasyim asyari','KH Wahid hasyim','Pekalongan group',50000, 100);

 $produk2 = new Biodata('KH Ahmad dahlan','Tidak diketahui','Pekalongan group',50000, 1950);

 $produk3 = new Tutorial('Learning php','M.Dzaki ardiansyah','Youtube',90000,17);

 $infoproduk = new CetakInfoProduk();
 $infoproduk->tambahProduk($produk1);
 $infoproduk->tambahProduk($produk2);
 $infoproduk->tambahProduk($produk3);
 echo $infoproduk->cetak();
 echo "<hr>";
 $obj = new Coba();
 new User();