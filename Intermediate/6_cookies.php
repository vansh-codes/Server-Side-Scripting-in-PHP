<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
</head>

<body>
    <h1 style="text-align: center;">Cookies</h1>
    <?php
    // Set cookie
    $cookie_name = "user";
    $cookie_value = "John Doe";
    echo time() . "<br>";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Cookie '" . $cookie_name . "' is set!<br>";

    if (isset($_COOKIE['users'])) {
        echo "Value is: " . $_COOKIE['users'] . "<br>";
    } else {
        echo "Cookie 'users' is not set! <br>";
    }
    ?>
</body>

</html>