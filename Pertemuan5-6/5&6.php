<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 dan 6</title>
</head>
<body>
    <h1>Array PHP</h1>
    <h3>Nama : Khusniyatul Latifah </h3>
    <h3>NIM  : 212552016253881</h3> <br>
    <?php
    echo "<h3>9. Perkenalan Array</h3>";
    // ---------- Tipe Data Array ----------- //
    $hewan = array('Anjing', 'Kucing', 'Domba', 'Kuda', 'Kucing');
    $nama = ['Diah', 'Andi', 'Rama'];
    $angka = [5, 6, 1, 4, 7, 5, 2];
    $nama2 = array('Nama' => 'Diah',
                   'Umur' => 20,
                   'Kerja' => 'Sekretaris'
                  );
    $nama3 = array('Status' => 'Belum Menikah',
                   'Laptop' => 'Hp',
                 );
    $data = array(
              array("Chef", "24", "Memasak"),
              array("Fotografer", "21", "Mengaji"),
              array("Desainer", "20", "Melukis")
                 );
    /* Menampilakn index array */
    print_r($hewan);
    print "<br>";
    /* Mengambil nilai tertentu pada Array */
    // Menampilkan variabel hewan array index ke 0
    echo "1. Hewan pada Array index ke 0 : ". $hewan[0]. "<br>";   
     // Menampilkan variabel hewan array index ke 1 
    echo "2. Hewan pada Array index ke 1 : ". $hewan[1]. "<br>"; 
    // Menampilkan variabel nama array index ke 2
    echo "3. Nama pada Array index ke 2 : ". $nama[2]. "<br>"; 
    // Menampilkan variabel nama array index ke 0
    echo "4. Nama pada Array index ke 2 : ". $nama[0]. "<br>";
    echo "<h3>10. Metode Array</h3>";
    // ---------- Metode Array ------------- // 
    // array_unique, _reserve, shuffle, count, sort 
    // Menampilkan variabel unik 
    print_r(array_unique($hewan));
    print "<br>";
    // Membalikkan array
    print_r(array_reverse($nama));
    print "<br>";
    // Menampilkan acak saat direload
    shuffle($hewan);
    print_r($hewan);
    print "<br>";
    // Melihat jumlah isi array 
    echo "Isi array : ". count($hewan). "<br>";
    echo "Isi array : ". count($nama). "<br>";
    // Mengurutkan array
    sort($nama);
    print_r($nama);
    print "<br>"; 
    sort($angka);
    print_r($angka);
    print "<br>"; 
    echo "<h3>11. belajar Associative array</h3>";
    // ---------- belajar Associative array ------------ //
    print_r($nama2);
    print "<br>";
    // Mengubah nilai didalam array 
    $nama2['Nama'] = 'Diah Ayu';
    echo "Pekerjaannya adalah " . $nama2['Nama']. "<br>"; 
    echo "<h3>12. metode associative array</h3>";
    // ---------- metode Associative array ------------ //
    // array_values array_keys array_merge
    // mengembalikan nilainya 
    print_r(array_values($nama2));
    print "<br>";
    // mengembalikan nilai keys
    print_r(array_keys($nama2));
    print "<br>";
    // menggabungkan beberapa array
    print_r(array_merge($nama2, $nama3));
    print "<br>";
    echo "<h3>13. mengenal multi dimensi array</h3>";
    // ---------- mengenal multi dimensi array ------------ //
    
    // 00 01 02
    // 10 11 12
    // 20 21 22

    $data [1][2] = "Menggambar";
    echo $data[1][2];
    print "<br>";
    echo "<h3>Super Global Array</h3>";
    // ---------- mengenal super global array ------------ //
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?> 
</body>
</html>