<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <?php 
     

     for ($i=0; $i <= 10 ; $i++) { 
        for ($j=0; $j <= 10 ; $j++) { 
         
            $hasil = $i * $j;

            echo "<br>";

            echo "$i x $j = $hasil";  

            
        }

        echo "<br>";

     }
     


     ?>
    
    
</body>
</html>