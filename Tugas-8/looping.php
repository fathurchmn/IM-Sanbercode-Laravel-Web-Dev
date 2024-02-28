<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih Looping PHP</h1>
    <?php 
    echo "<h3> Contoh 1 </h1>";
    echo "<h5>Looping Pertama</h5>";
    for($i=2; $i<=20; $i+=2){
        echo $i . " - Angka Ganjil <br>";
    };
    echo "<h5>Looping Kedua</h5>";
    for($a=20; $a>=1; $a-=2){
        echo $a . " - Angka Ganjil <br>";
    }


    echo "<h3> Contoh 2 </h1>";
    $angka = [18, 45, 29, 61, 47, 34];
    echo "Array angka : ";
    print_r($angka);
    echo "<br>";
    echo "Hasil sisa dari Array angka";
    foreach($angka as $value){
        $rest[] = $value %= 5;
    }
    print_r($rest);
    echo "<br>";

    echo "<h3> Contoh 3 </h1>";
    $biodata = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg'],
    ];
    foreach($biodata as $key => $value){
        $items = array(
            "ID" => $value [0],
            "Name" => $value [1],
            "Price" => $value [2],
            "Description" => $value [3],
            "Source" => $value [4]
        );
        print_r($items);
        echo "<br>";
    }


    echo "<h3> Contoh 4 </h1>";
    for($j=1; $j<=5; $j++){
        for($b=1; $b<=$j; $b++){
            echo "*";
        }
        echo "<br>";
    }


    ?>
</body>
</html>