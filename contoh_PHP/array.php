<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>array</h2> <br>
    <?php 
    echo "<h3> Contoh1</h3>";
    echo $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    print_r($kids);
  
    echo $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    print_r($adults);

    echo "<h3> Contoh2</h3>";
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids = " . count($kids);
    echo "<ol>";
    echo "<li>" . $kids[0] . "</li>";
    echo "<li>" . $kids[1] . "</li>";
    echo "<li>" . $kids[2] . "</li>";
    echo "<li>" . $kids[3] . "</li>";
    echo "<li>" . $kids[4] . "</li>";
    echo "</ol>";

    echo "Total Adults = " . count($adults);
    echo "<ol>";
    echo "<li>" . $adults[0] . "</li>";
    echo "<li>" . $adults[1] . "</li>";
    echo "<li>" . $adults[2] . "</li>";
    echo "<li>" . $adults[3] . "</li>";
    echo "<li>" . $adults[4] . "</li>";
    echo "</ol>";

    echo "<h3>Contoh3</h3>";
    $biodata = [
        ["Name" => "Will Byers", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"],
        ["Name" => "Mike Wheeler", "Age" => 12, "Aliases" => "Dungeon Master", "Status" => "Alive"],
        ["Name" => "Jim Hooper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Decease"],
        ["Name" => "Eleven", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"]
    ];

    echo"<pre>";
    print_r($biodata);
    echo"</pre>";

    ?>
</body>
</html> ]