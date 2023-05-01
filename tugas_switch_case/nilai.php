<?php
$nilai = 80;
switch($nilai){
    case(($nilai >=90) && ($nilai<=100)) :
        $index = "A";
        break;
    
    case(($nilai>=80) && ($nilai<90)) :
        $index = "B";
        break;

    case(($nilai>=70) && ($nilai<80)) :
        $index = "C";
        break;

    default:
    $index = "D";
}
echo " halo,Anda mendapatkan : $nilai <br> dikonversi menjadi : '$index'";
