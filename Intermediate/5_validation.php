<?php
// Define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate website
    if (empty($_POST["website"])) {
        $website = ""; // Optional field
    } else {
        $website = test_input($_POST["website"]);
        // Check if website URL is valid
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL format";
        }
    }

    // Validate comment (optional field)
    if (!empty($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
    }

    // Validate gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

// Function to sanitize form input data
function test_input($data) {
    $data = trim($data);               // Remove whitespace
    $data = stripslashes($data);       // Remove slashes
    $data = htmlspecialchars($data);   // Convert special characters
    return $data;
}
?>