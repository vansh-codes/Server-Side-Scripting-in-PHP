<?php
echo "Hello World!";
echo "<br>";
$a = 5;
$b = 10;
$c = $a + $b;
$d = $a * $b;
echo "Addition of a and b is: $c<br>";
echo "Multiplication of a and b is: $d<br>";
?>

<!-- Variable naming conventions in PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>

<body>
    <?php
    echo "HELLO<br>";
    const WISHES = "Good Day!<br>";     // method 1
    echo WISHES;
    echo constant("WISHES");            // method 2
    define("WISHESS", "Good Day!");    // method 3
    echo WISHESS;
    echo "<br>";
    $a = "Welcome to LPU, Punjab";
    echo gettype($a);       // string
    echo "<br>";
    echo strlen($a);    // length of string $a = 22
    echo "<br>";
    echo str_word_count($a);   // word count of string $a = 4
    echo "<br>";
    $t = date("H");     // current hour
    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
</body>

</html>