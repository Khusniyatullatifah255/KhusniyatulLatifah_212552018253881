<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1</title>
</head>
<body>
    <?php 
    $kata = "Haloo guys"; /* Variabel menampilkan kata haloo guys*/
    $nama1 = "Khusniyatul latifah"; /* Variabel nama panjang*/
    $nama2 = "Latifah"; /* Variabel nama panggilan */
    $a = 12; 
    $c = 1.4;
    $b = 4;

    /* 
    Disini tempat untuk menampilakn hasil
    */
    echo "<h1>$kata</h1>";
    echo "Perkenalkan nama saya ". $nama1 . "<br>";
    echo "Selamat datang di Belajar PHP ". "$nama2". "<br>";
    /* 
    Hasil operasi dari variabel a , b , dan c
    */
    echo "Hasil dari penjumlahan". $a. "+". $c . "=" ; 
    echo $a + $c. "<br>"; // Operator Penjumlahan
    
    echo "Hasil dari perkalian". $a. "*". $c . "=" ;
    echo $a * $c. "<br>"; // Operator Perkalian
    
    echo "Hasil dari pengurangan". $a. "-". $b . "=" ;
    echo $a - $b. "<br>"; // Operator Pengurangan
   
    echo "Hasil dari pembagian". $b. "/". $c. "=";
    echo $b / $c. "<br>"; // Operator Pembagian
    
    /* 
    Menampilkan nilai minimal menggunakan math 
    */
    echo "Angka hari ini adalah ". min($a, $b, $c);
    
    ?>
</body>
</html>