<?php
function errorHandler($errlvl, $errmsg, $filepath, $lineno)
{
    echo "<b>Error:</b> [$errlvl] $errmsg" . " File path: $filepath, Line No: $lineno";
    include 'error_page.php';
}
set_error_handler("errorHandler");
$test = 2;
if ($test >= 1) {
    trigger_error("Value must be 1 or below", E_USER_DEPRECATED);
}
