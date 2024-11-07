<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code 1</title>
</head>

<body>
    <?php
    $people = array(
        array("Name" => "Ram", "Category" => "Grocery", "City" => "Ghaziabad"),
        array("Name" => "Shyam", "Category" => "Garments", "City" => "Noida"),
        array("Name" => "Mahesh", "Category" => "Grocery", "City" => "Lucknow"),
    );

    echo "Details of people:<br>";

    for ($i = 0; $i < count($people); $i++) {
        foreach ($people[$i] as $key => $value) {
            if ($key !== "City")
                echo $key . " : " . $value . ", ";
            else
                echo $key . " : " . $value;
        }
        echo "<br>";
    }
    ?>
</body>

</html>