<?php
function persegi (){
    $sisi = 10;
    $luas = $sisi*$sisi;
    echo " <b>1. Rumus Menghitung Luas Persegi</b><br>";
    echo " Rumus Luas : L = Sisi x Sisi <br>";
    echo " Diketahui S adalah panjang sisi dari persegi <br><br>";
    echo " Panjang Sisi persegi (s) : $sisi cm<br>";
    echo " L= $sisi x $sisi   <br>";
    echo " Hasil Luas nya adalah : $luas ";
   }
   function persegi_panjang (){
    $p = 20;
    $l = 10;
    $luas = $p*$l;
    echo " <b>2. Rumus Menghitung Luas Persegi Panjang</b><br>";
    echo " Rumus Luas : L = Panjang x Lebar<br><br>";
    echo " Panjang : $p cm<br>";
    echo " lebar : $l cm<br>"; 
    echo " L = $p x $l  <br>";
    echo " Hasil Luas nya adalah : $luas ";
   }
   function segitiga (){
    $a = 20;
    $t = 10;
    $p = 1/2;
    $luas = $p*$a*$t;
    echo " <b>3. Rumus Menghitung Luas Segitiga</b><br>";
    echo " Rumus Luas : L = 1/2 x Alas x Tinggi<br><br>";
    echo " Alas : $a cm<br>";
    echo " Tinggi : $t cm<br>"; 
    echo " L = 1/2 x $a x $t  <br>";
    echo " Hasil Luas nya adalah : $luas ";
   }
   function jajargenjang (){
    $a = 30;
    $t = 10;
    $luas = $a*$t;
    echo " <b>3. Rumus Menghitung Luas Jajargenjang</b><br>";
    echo " Rumus Luas : L = Alas x Tinggi<br><br>";
    echo " Alas : $a cm<br>";
    echo " Tinggi : $t cm<br>"; 
    echo " L =  $a x $t  <br>";
    echo " Hasil Luas nya adalah : $luas ";
   }
   function belah_ketupat (){
    $d1 = 20;
    $d2 = 10;
    $p = 1/2;
    $luas = $p*$d1*$d2;
    echo " <b>3. Rumus Menghitung Luas Belah Ketupat</b><br>";
    echo " Rumus Luas : L = 1/2 x Diagonal 1 x diagobal 2<br><br>";
    echo " d1 : $d1 cm<br>";
    echo " d2 : $d2 cm<br>"; 
    echo " L = 1/2 x $d1 x $d2  <br>";
    echo " Hasil Luas nya adalah : $luas ";
   }


  persegi();
   echo "<br><br><br>";
   persegi_panjang();
   echo "<br><br><br>";
   segitiga();
   echo "<br><br><br>";
   jajargenjang();
   echo"<br><br><br>";
   belah_ketupat();
   echo"<br><br><br>";
   


   ?>
