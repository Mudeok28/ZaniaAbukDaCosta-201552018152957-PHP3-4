<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      echo "<h1>Sekolah Koding</h1>";
      echo "Halo <br>";
      echo "Member";

       /* berapa baris komentar terserah ya guys ya */
      // variabel pada php
      $nama = "Sekolah koding 123";
      $_123 = "text baru";

      echo "<h1>$_123</h1>";
      echo "Halo ". $nama ."<br>";
      echo " Member";

      // tipe data -string-
      $nama = "Sekolah koding";
      $nama2 = 'Bermain koding';

    echo "selamat datang di $nama <br>";
    // tipe data angka/number
    // 1. Integer 2. Float

    $angka  = 1000;
    $angka2 = 3;
    $angka3 = 2.64;

    // operator aritmatika
    // + - * / % ++ --
    // nama = nilai
    // $angka = $angka + $angka2;
    // $angka *= $angka2;

    //math method
    //round rand(min, max) max min
    // echo "Angka hari ini adalah ". min($angka3, $angka, $angka2)

    // ---------- String ------------
    // strlen && str_word_count
    // str_repeat(text, times); str_shuffle(text)

    $text = "Hai semuanya";
    echo str_repeat(str_replace( "hai", "Hallo",$text), 10 );
    ?>
  </body>
</html>