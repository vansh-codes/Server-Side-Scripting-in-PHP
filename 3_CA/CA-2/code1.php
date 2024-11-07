<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CA</title>
</head>

<body>
    <center>
        <h1>PHP FORM VALIDATION</h1>
        <form action="code1.php" method="POST">
            <p style="color: red">* required field</p>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required><br><br>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" required><br><br>
            <label for="website">Website: </label>
            <input type="text" name="website" id="website" required><br><br>
            <label for="comment">Comment: </label>
            <textarea rows="3" cols="24" name="comment" id="comment"></textarea><br><br>
            <label for="gender">Gender: </label>
            <input type="radio" name="male" value="Male">Male
            <input type="radio" name="female" value="Female">Female
            <input type="radio" name="other" value="Other">Other
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comment = $_POST['comment'];

        echo "Name: " . $name . "<br>";

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo ("$email is a valid email address<br>");
        } else {
            echo ("$email is not a valid email address<br>");
        }

        $url = filter_var($website, FILTER_SANITIZE_URL);

        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            echo ("$url is a valid URL<br>");
        } else {
            echo ("$url is not a valid URL<br>");
        }

        if (isset($comment)) {
            $commentVal = filter_var($comment, FILTER_SANITIZE_STRING);
            echo "Comment: " . $commentVal . "<br>";
        }

        if (isset($_POST['male'])) {
            $gender = $_POST['male'];
            echo "Gender: " . $gender . "<br>";
        }

        if (isset($_POST['female'])) {
            $gender = $_POST['female'];
            echo "Gender: " . $gender . "<br>";
        }

        if (isset($_POST['other'])) {
            $gender = $_POST['other'];
            echo "Gender: " . $gender . "<br>";
        }
    }

    ?>
</body>

</html>