<?php
//Start thesession
session_start();
//Checkif theuserisalreadyloggedin,redirect todashboardif true
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
//Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Example:Check if the username and password are correct (for simplicity,we use hardcoded values)
    if ($username == 'user' && $password == '123') {
        //Set session variables for username and last logintime
        $_SESSION['username'] = $username;
        $_SESSION['last_login'] = time(); //Store the current time as last login time
        //Redirect to the dashboard page
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <?php if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    } ?>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>