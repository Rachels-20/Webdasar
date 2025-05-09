<?php

// if.. elseif .. else

$password = 1234;

if($password == "1234"){
    echo "password benar";
}

echo "<br>";

$angka=5;

if($angka > 5){
    echo "Angka $angka besar dari 5";
} else {
    echo "Angka $angka kecil dari 5";
}

echo "<br>";

if($angka == 5){
    echo "Angka $angka sama dengan 5";
} elseif($angka > 5){
    echo "Angka $angka sama dengan 5";
} else{
    echo "Angka $angka kecil dari 5";
}

echo "<br>";

// operator ternary

echo $password == 1234 ? "Password benar" : "Password salah";

echo "<br>";

/*
nilai > 85=A
nilai > 75=B
nilai > 65=C
nilai > 55=D
nilai < 55=E
0 - 100
*/

$nilai = 80;

if($nilai >=85  && $nilai <=100){
    $predikat= "A";
} elseif($nilai >=75 && $nilai <=84){
    $predikat= "B";
} elseif($nilai >=65 && $nilai <=74){
    $predikat= "C";
} elseif($nilai >=55 && $nilai <=64){
    $predikat= "D";
} elseif($nilai >=1 && $nilai <=55){
    $predikat= "E";
} else{
    $predikat ="(Nilai tidak valid!)";
}

echo "Predikat anda $predikat";

echo "<br>";

// switch case

$angkaBulan = date('n');

echo "$angkaBulan <br>";

switch($angkaBulan){
    case 1:
        $namaBulan = "Januari";
        break;
    case 2:
        $namaBulan = "Februari";
        break;
    case 3: 
        $namaBulan = "Maret";
        break;
    case 4: 
        $namaBulan = "April";
        break;
    case 5:
        $namaBulan = "Mei";
        break;
    case 6:
        $namaBulan = "Juni";
        break;
    case 7: 
        $namaBulan = "Juli";
        break;
    case 8:
        $namaBulan = "Agustus";
        break;
    case 9:
        $namaBulan = "September";
        break;
    case 10:
        $namaBulan = "Oktober";
        break;
    case 11:
        $namaBulan = "November";
        break;
    case 12: 
        $namaBulan = "Desember";
        break;
    default:
        $namaBulan = "Bulan Tidak Valid!";
        break;
}

echo "Bulan ke $angkaBulan adalah bulan $namaBulan <br>";

switch(true){
    case ($nilai >=85 && $nilai <=100):
        $predikat="A";
        break;
    case ($nilai >=75 && $nilai <=84):
        $predikat="B";
        break;
    case ($nilai >=65 && $nilai <=74):
        $predikat="C";
        break;
    case ($nilai >=55 && $nilai <=64):
        $predikat="D";
        break;
    case ($nilai >=1 && $nilai <=54):
        $predikat="E";
        break;
    default:
        $predikat="Nilai tidak valid!";
        break;
}

echo "Predikat anda adalah $predikat";

?>