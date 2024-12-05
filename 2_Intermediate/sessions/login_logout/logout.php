<?php
// Start the session
session_start();
// Destroy all session variables and session data
session_unset();
session_destroy();
// Redirect to login page
header("Location: login.php");
exit;
