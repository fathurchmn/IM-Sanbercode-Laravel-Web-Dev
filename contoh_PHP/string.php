<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal</h1>
        <?php 
            echo "<h3> Contoh 1</h3>";
            $kalimat1 = "Hello PHP!";
            echo "Output : ".  $kalimat1 . "<br>";
            echo "Jumlah Kata : ". strlen($kalimat1) . "<br>";
            echo "Jumlah Kalimat : ". str_word_count($kalimat1);

            echo "<h3> Contoh 2</h3>";
            $string2 = "I'm ready for the challenges";
            echo "Kalimat Kedua : " . $string2."<br>";
            echo "Kata Pertama : " .  substr($string2, 0,4) . "<br>";
            echo "Kata Kedua : " . substr($string2,4,5) . "<br>";
            echo "Kata Ketiga : " . substr($string2,10,3) . "<br>";
            echo "Kata Keempat : " . substr($string2,14,3) . "<br>";
            echo "Kata Kelima : " . substr($string2,18,10) . "<br>";
            echo "Jumlah Kata : ". strlen($string2) . "<br>";
            echo "Jumlah Kalimat : ". str_word_count($string2);

            echo "<h3> Contoh 3</h3>";
            $string3 = "PHP is old but sexy!";
            echo "Kalimat Ketiga : " . $string3."<br>";
            echo "Ganti Kalimat Ketiga : " . str_replace("sexy", "awesome",$string3)."<br>";
        ?>

</body>
</html>