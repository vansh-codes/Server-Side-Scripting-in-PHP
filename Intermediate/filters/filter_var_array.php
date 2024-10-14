<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
</head>

<body>
    <?php
    $data = array(
        "username" => "Shashank",
        "age" => 890,
        "email" => "shashank@gmail.com"
    );

    $filters = array(
        "username" => 'FILTER_SANITIZE_STRING',
        "age" => array("filter" => FILTER_VALIDATE_INT, "options" => array("min_range" => 1, "max_range" => 100)),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($data, $filters));
    ?>
</body>

</html>