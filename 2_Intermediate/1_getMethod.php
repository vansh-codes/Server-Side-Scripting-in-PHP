<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
    <style>
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        input[type="text"],
        input[type="number"] {
            margin-bottom: 10px;
            padding: 5px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="1_getMethod.php" method="get">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age" placeholder="Enter your age">
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['name']) && isset($_GET['age']) && !empty($_GET['name']) && !empty($_GET['age'])) {
        echo "Hello, " . $_GET['name'];
        echo "<br>";
        echo "Your age is " . $_GET['age'];
    } else {
        echo "Fill the name field";
    }
    ?>
</body>

</html>