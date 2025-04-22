<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php

   //soal1

   echo "<br/>";
   echo "<br/>";

   $thnLahir = 2005;
   $thnSkrg = 2025;

   $umurSkrg =  $thnSkrg - $thnLahir ;
   echo "umurku adalah $umurSkrg";

   

   //soal2
   echo "<br/>";
   echo "<br/>";

   $usd = 2;
   $idr = 16000;

   $kvs = $usd * $idr;

   echo "$usd USD adalah $kvs Rupiah";
   

   //soal3

   echo "<br/>";
   echo "<br/>";
   
   $clc = 1;
   $fh = ($clc * 9/5) +32;

   echo "$clc celcius ke fahrenheit adalah $fh";


   //soal4
   echo "<br/>";
   echo "<br/>";

   $r = 20;
   $phi = 3.14;

   $hasil = $phi * $r * $r;

   echo "jari-jari nya $r jadi luas lingkaranya $hasil";  


   ?>
    
</body>
</html>