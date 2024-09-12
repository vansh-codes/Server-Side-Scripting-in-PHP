<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="3_requestVariable.php" method="get">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age" placeholder="Enter your age">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "You have submitted the form using POST method";
    } else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "You have submitted the form using GET method";
    }
    ?>
</body>

</html>