<!-- It is used to manage information across different -->
<!-- Stores data on server rather than user's computer -->
<!-- Everytime we login a sid is created (session) -->
<!-- A session is a way to store info (in variables) to be stored on diff web pages -->

<?php
    session_start();
    if(isset($_SESSION["username"])){
        echo "Welcome".$_SESSION["username"];
        echo "<br> Your favourite category is ".$_SESSION["category"];
        echo "<br>";
    }
?>