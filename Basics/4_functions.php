<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php function helloWorld()
    {
        echo "Hello, world!";
    }

    helloWorld();
    echo "<br>";
    $users = ["Manoj", "Rahul", "Raj"];
    echo (is_array($users) ? "Yes, it is an array" : "No, it is not an array");
    echo "<br>";

    unset($users[2]);
    print_r($users);
    echo "<br>";
    // To remove last element
    array_pop($users);
    print_r($users);
    echo "<br>";

    $emp = ["name" => "abc", "age" => 25, "salary" => 25000];
    print_r(array_keys($emp));
    echo "<br>";

    // Using implode function to cpnvert array to string
    $colors = ["red", "green", "blue"];
    $colorsString = implode(", ", $colors);
    echo $colorsString;
    echo "<br>";

    // Using explode function to convert string to array
    $colorsString = "red, green, blue";
    $colorsArray = explode(", ", $colorsString);
    print_r($colorsArray);
    echo "<br>";
    // Removing duplicate values from an array
    $numbers = [1, 2, 3, 4, 4, 5, 6, 6];
    $uniqueNumbers = array_unique($numbers);
    print_r($uniqueNumbers);
    echo "<br>";
    // Merging two arrays
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $mergedArray = array_merge($array1, $array2);
    print_r($mergedArray);
    echo "<br>";
    // Combining two arrays into an associative array
    $keys = ["name", "age", "salary"];
    $values = ["John Doe", 30, 50000];
    $combinedArray = array_combine($keys, $values);
    print_r($combinedArray);
    echo "<br>";
    // Splitting an array into chunks
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $chunks = array_chunk($numbers, 3); //preserve key
    print_r($chunks);
    echo "<br>";
    $courses = array("PHP", "Laravel", "Node.js", "HTML", "CSS", "ASP.NET");
    $slicedArray = array_slice($courses, 2, 3, true);
    print_r($slicedArray);
    echo "<br>";
    // Finding the difference between two arrays
    $array1 = ["apple", "banana", "orange"];
    $array2 = ["banana", "orange", "grapefruit"];
    $difference = array_diff($array1, $array2); //returns entry which are present in array 1 but not array 2
    print_r($difference);
    echo "<br>";
    ?>
</body>

</html>