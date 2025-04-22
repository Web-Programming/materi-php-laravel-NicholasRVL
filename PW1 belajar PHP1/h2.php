<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1><?php  echo "halo lagi"; ?></h1>

   <?php
   
   $jam = 12;
   if($jam <= 12){
    echo "<h3> Selamat Pagi</h3>";
   }else{
    echo "<h3> Selamat Siang</h3>";
   }

   //variiabel array
   $hoby = ['makan', 'minum', 'tidur'];
   var_dump($hoby);
   echo "<br/>";
   echo "<br/>";
   if(is_array($hoby)){
    echo "hoby saya ada ". count($hoby);
   }


   //tipe data null
   echo "<br/>";
   echo "<br/>";
   $nilaiuts = NULL;
   if(is_null (value : $nilaiuts)){

    echo "nilai uts belum keluar";

   }

   //soal1

   echo "<br/>";
   echo "<br/>";

   $thnLahir = 2005;
   $thnSkrg = 2025;

   $umurSkrg =  $thnSkrg - $thnLahir ;
   echo $umurSkrg;

   

   //soal2
   echo "<br/>";
   echo "<br/>";

   $usd = 2;
   $idr = 16000;

   $kvs = $usd * $idr;

   echo $kvs;
   

   //soal3

   echo "<br/>";
   echo "<br/>";
   
   $clc = 1;
   $fh = ($clc * 9/5) +32;

   echo $fh;



   ?>
    
</body>
</html>