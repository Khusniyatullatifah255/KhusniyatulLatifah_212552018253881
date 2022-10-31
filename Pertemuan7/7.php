<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7</title>
</head>
<body>
    <h1>Loop PHP</h1>
    <?php
      echo "<h3>14 for loop pada php</h3>";
      //---------- Perulangan ----------
      //for(variabel(mulai), batas(syarat), perubahan)
      // kumpulan variabel yang digunakan
      $hewan = ['anjing', 'babi', 'cicak', 'domba', 'kuda', 'jerapah']; //variabel array
      $dataku = ['Nama' => 'Saquile',
                 'Umur' => 21,
                 'Sifat' => 'Rajin'
                ];
      $i = 0;

      for($i = 0; $i < 5; $i++)
      {
        echo "--------------------";
        echo "Sekolah latifah ";
        echo "-------------------- <br>";
      }
      //mengeluarkan hasil array
      echo "<h3>15 Mengeluarkan hasil array</h3>";
      for($i = 0; $i < count($hewan) -2 ; $i++)
      {
        echo "--------------------";
        echo $hewan[$i];
        echo "-------------------- <br>";
      }
      // foreach untuk array
      echo "<h3>16 Foreach untuk array</h3>";
      foreach($hewan as $hw)
      {
        echo "--------------------";
        echo $hw;
        echo "-------------------- <br>";
      } //untuk mengeluarkan semua isi array(cara lebih simpel)
      echo "<h3>17 Foreach untuk assosiatif array</h3>";
      foreach($dataku as $key => $value)
      {
        echo $key. "<br>"; // untuk mengeluarkan value
        echo $value. "<br>"; // untuk mengeluarkan key
      } // untuk mempermudah 
      echo "<h3>18 While dan do while</h3>"; 
      echo "<h5>While</h5>";
      $i = 0; 
      while ($i < count($hewan))
      {
        echo$hewan[$i]. "<br>";
        $i++;
      } 
      echo "<h5> do While</h5>";
      //do{
        //echo $hewan[$i]. "<br>";
        //$i++;
      //}while($i < count($hewan));
    ?>
</body>
</html>