<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <?php
    $i = 1;
    while($i <= 10) {
        echo "The number is: $i<br>";
        $i++;
    }

    echo "<br>";
    $i = 1;
    do {
        echo "The number is: $i<br>";
        $i++;
    } while($i <= 10);

    echo "<br>";
    for($i = 1; $i <= 10; $i++) {
        echo "The number is: $i<br>";
    }

    echo "<br>";
    $colors = array("Red", "Green", "Blue", "Yellow");
    foreach($colors as $value) {
        echo "$value<br>";
    }
    echo "<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }
    echo "<br>";
    $day = "Monday";

    switch ($day) {
        case "Monday":
            // continue;
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "Today is Wednesday";
            break;
        case "Thursday":
            echo "Today is Thursday";
            break;
        case "Friday":
            echo "Today is Friday";
            break;
        case "Saturday":
            echo "Today is Saturday";
            break;
        case "Sunday":
            echo "Today is Sunday";
            break;
        default:
            echo "Invalid day";
    }
    
    ?>
</body>

</html>