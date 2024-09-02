<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $colors = array("Red", "Green", "Blue", "Yellow");
    foreach ($colors as $value) {
        echo "$value<br>";
    }
    echo "<br>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }
    echo "<br>";
    $day = "Monday";
    $month = "January";
    $year = 2020;
    $date = array($day, $month, $year);
    foreach ($date as $value) {
        echo "$value<br>";
    }
    echo "<br>";
    $date = array("day" => $day, "month" => $month, "year" => $year);
    foreach ($date as $key => $value) {
        echo "$key = $value<br>";
    }
    echo "<br>Using for loop";
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    echo "<br>Using For each loop";
    foreach ($cars as $row) {
        echo "<p><b>Row number</b></p>";
        echo "<ul>";
        foreach ($row as $col) {
            echo "<li>" . $col . "</li>";
        }
        echo "</ul>";
    }
    echo "<br>";
    $res = array(
            array("Manoj", 7.8, "Pass"),
            array("Aditya", 3.4, "Fail"),
            array("Rahul", 8.9, "Pass"),
            array("Rohit", 9.2, "Pass")
        );
    
    for($row = 0; $row < 4; $row++){
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        foreach($res[$row] as $ress){
            echo "<li>" . $ress . "</li>";
        }
        echo "</ul>";
    }
    echo "<br>";
    $emp = array((101)=>"Rahul", (102)=>"Rohit", (103)=>"Aditya", (104)=>"Manoj");
    echo "<pre>";
    print_r($emp);  // print_r() is used to print the human-readable information about a variable
    echo "</pre>";
    echo "<br>2D traversal using foreach loop";
    $books = array("C++"=>array("name" => "Beginning with C++", "author" => "E.Balagurusamy", "price" => 450),
                    "Java"=>array("name" => "Java Programming", "author" => "Herbert Schildt", "price" => 500),
                    "Python"=>array("name" => "Python Programming", "author" => "Guido van Rossum", "price" => 600)
            );
    $keys = array_keys($books);
    for($i = 0;$i<count($books);$i++){
        echo "<h4>" . $keys[$i] . "</h4>";
        foreach($books[$keys[$i]] as $key => $value){
            echo $key . " : " . $value . "<br>";
        }
        // echo "<br>";
    }
    echo "<br>2D traversal using for loop(ERROR needs to be fixed)";
    for($i=0; $i <count($books); $i++){
        for($j=0; $j<count($books[$keys[$i]]); $j++){
            echo $books[$keys[$i]][$keys[$j]] . "<br>";
        }
    }


?>
</body>

</html>