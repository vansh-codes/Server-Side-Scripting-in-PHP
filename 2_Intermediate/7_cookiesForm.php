<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Form</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <style>
        .error {
            color: red;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Cookies</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-align: center; margin-top: 20px;">
        <label for="user" style="font-size: 1.2em; margin-right: 10px;">User:</label>
        <input type="text" name="user" id="user" style="padding: 5px; font-size: 1em;">
        <input type="submit" name="set" value="Set" style="padding: 5px 10px; font-size: 1em; margin-left: 10px;">
        <input type="submit" name="del" value="Delete" style="padding: 5px 10px; font-size: 1em; margin-left: 10px;">
    </form>
    <?php
        if(isset($_POST['set'])){
            $cookie = $_POST['user'];
            setcookie($cookie, $cookie, time() + (86400 * 30), "/");
            echo "Cookie '" . $cookie . "' is set!<br>";
        }
        
        if(isset($_POST['del'])){
            $cookie1 = $_POST['user'];
            setcookie($cookie1, "", time() - 3600, "/");
            echo "Cookie '" . $cookie1 . "' is deleted!<br>";
        }
    ?>
</body>

</html>