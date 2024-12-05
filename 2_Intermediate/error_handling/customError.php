<?php
// Custom error handler function
function customErrorHandler($errorLevel, $errorMessage, $errorFile, $errorLine)
{
    // Handle the error based on your application's logic
    // For example, you can log the error, display a custom error page, or send an email notification

    // Log the error
    // error_log("Error: [$errorLevel] $errorMessage in $errorFile on line $errorLine");
    echo "Error: [$errorLevel] $errorMessage in $errorFile on line $errorLine";

    // Display a custom error page
    include 'error_page.php';

    // Prevent the default error handling
    return true;
}

// Set the custom error handler
set_error_handler('customErrorHandler');

// Trigger an error
echo $undefinedVariable;
