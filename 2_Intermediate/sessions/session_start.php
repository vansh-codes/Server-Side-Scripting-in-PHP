<?php
session_start();
$_SESSION["username"] = "Vansh";
$_SESSION["category"] = "Chess";
echo "We have saved your session";
