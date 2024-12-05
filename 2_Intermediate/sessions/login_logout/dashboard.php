<?php
//Start thesession
session_start();
//Checkif theuserisloggedin
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
// Check if session has expired (10 minutes)
$session_timeout = 30; // 30 seconds
if (isset($_SESSION['last_login']) && (time() - $_SESSION['last_login']) > $session_timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
// Update last login time to the current time
$_SESSION['last_login'] = time();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to your Dashboard</h2>
    <p>Logged in as: <?php echo $_SESSION['username']; ?></p>
    <p>Last login time: <?php echo date('Y-m-d H:i:s', $_SESSION['last_login']); ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>