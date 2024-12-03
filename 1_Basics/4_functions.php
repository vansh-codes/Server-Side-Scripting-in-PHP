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
    // To push elements to last
    array_push($users, "Raj", "Yash");
    print_r($users);
    echo "<br>";
    unset($users);
    print_r($users ?? "not exists");
    echo "<br>";

    $emp = ["name" => "abc", "age" => 25, "salary" => 25000];
    print_r(array_keys($emp));
    echo "<br>";

    // Using implode function to cpnvert array to string
    $colors = ["red", "green", "blue"];
    $colorsString = implode(", ", $colors);
    echo $colorsString;
    echo "<br>";
    echo gettype($colorsString);
    echo "<br>";

    // Using explode function to convert string to array
    $colorsString = "red, green, blue, orange";
    $colorsArray = explode(", ", $colorsString);
    print_r($colorsArray);
    echo "<br>";
    // Removing duplicate values from an array
    $numbers = [1, 2, 3, 4, 4, 5, 6, 6];
    $uniqueNumbers = array_unique($numbers);
    print_r($uniqueNumbers);
    echo "<br>";
    // Merging two arrays
    $array1 = ["0" => 1, 2, 3, 4];
    $array2 = [4, 5, "b" => 6, 7];
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
    $array1 = ["apple", "banana", "orange", "pineapple"];
    $array2 = ["banana", "orange", "grapefruit"];
    $array3 = ["tomato", "orange", "grapefruit"];
    $difference = array_diff($array1, $array2, $array3); //returns entry which are present in array 1 but not array 2
    print_r($difference);
    echo "<br>";
    // reverse an array
    $numbers = [1, 2, 3, 4, 5];
    $reversedArray = array_reverse($numbers, true);
    print_r($reversedArray);
    echo "<br>";
    $a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
    print_r(array_reverse($a));
    echo "<br>Sort functions<br>";
    // Sorting an array in ascending order
    $numbers = [4, 2, 5, 1, 3];
    sort($numbers);
    print_r($numbers);
    echo "<br>";
    // Sorting an array in descending order
    $numbers = [4, 2, 5, 1, 3];
    rsort($numbers);
    print_r($numbers);
    echo "<br>";
    // Sorting an associative array by values
    $salaries = ["John" => 40000, "Jane" => 50000, "Jim" => 30000];
    asort($salaries);
    print_r($salaries);
    echo "<br>";
    // Sorting an associative array by keys
    $salaries = ["John" => 40000, "Jane" => 50000, "Jim" => 30000];
    ksort($salaries);
    print_r($salaries);
    echo "<br>";
    // Sorting an associative array by values in descending order
    $salaries = ["John" => 40000, "Jane" => 50000, "Jim" => 30000];
    arsort($salaries);
    print_r($salaries);
    echo "<br>";
    // Sorting an associative array by keys in descending order
    $salaries = ["John" => 40000, "Jane" => 50000, "Jim" => 30000];
    krsort($salaries);
    print_r($salaries);
    echo "<br>";
    // Sorting a multidimensional array
    $users = [
        ["name" => "John", "age" => 30],
        ["name" => "Jane", "age" => 25],
        ["name" => "Jim", "age" => 35]
    ];
    array_multisort(array_column($users, "age"), SORT_ASC, $users);
    print_r($users);
    echo "<br>";
    $result = array(
        array('name' => 'Manoj', 'cgpa' => 6.7, 'status' => 'pass'),
        array('name' => "Shalini", 'cgpa' => 9.8, 'status' => 'pass'),
        array('name' => 'Mani', 'cgpa' => 3.2, 'status' => 'fail')
    );
    $names = array_column($result, 'status', 'name');
    print_r($names);
    echo "<br>";
    echo "<br>Searching functions<br>";
    // Searching for a value in an array
    $numbers = [1, 2, 3, 4, 5];
    $key = array_search(3, $numbers);
    echo $key;
    echo "<br>";
    // Checking if a value exists in an array
    $numbers = [1, 2, 3, 4, 5];
    $exists = in_array(3, $numbers);
    echo $exists ? "Yes" : "No";
    echo "<br>";
    // Checking if a key exists in an array
    $emp = ["name" => "John", "age" => 30];
    $exists = array_key_exists("age", $emp);
    echo $exists ? "Yes" : "No";
    echo "<br>";
    // Counting the number of elements in an array
    $numbers = [1, 2, 3, 4, 5];
    $count = count($numbers);
    echo $count;
    echo "<br>";
    // Finding the maximum value in an array
    $max = max($numbers);
    echo $max;
    echo "<br>";
    // Finding the minimum value in an array
    $min = min($numbers);
    echo $min;
    echo "<br>";
    ?>
</body>

</html>