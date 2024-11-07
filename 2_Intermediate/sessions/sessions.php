<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        session_start();
        $_SESSION["username"] = "Vansh";
        echo "Welcome " . $_SESSION["username"];
    ?>
</body>

</html>

<!-- 
1. Used to manage 
2. In PHP, sessions allow you to store information in variables to be used across multiple pages, unlike cookies, 
 session data is stored on the server reducing security risks
3. starting a session: To start a session in PHP, use `session_start()` at the beginning of the script
4. to destroy the session entirely, we use session_destroy() function 
5. once the session is set, they can be accessed by other pages as well until the session is destroyed or expired
 -->