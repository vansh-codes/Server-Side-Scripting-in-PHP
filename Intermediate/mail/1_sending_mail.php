<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $check = mail("vanshchaurasiya1557@gmail.com", "testing mail from PHP", "Hello, This is a test mail from PHP", "From:vanshchaurasiya2417@gmail.com");
    if ($check) {
        echo "Mail sent successfully";
    } else {
        echo "Mail not sent";
    }
    ?>
</body>
</html>