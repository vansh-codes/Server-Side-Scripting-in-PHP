<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive</title>
</head>

<body>
    <?php
        $name = $_FILES['myfile']['name'];
        $tmp_names = $_FILES['myfile']['tmp_name'];
        if(move_uploaded_file($tmp_names, $name)){
            echo "Uploaded";
        }else{
            echo "File uploading failed";
        }
    ?>
</body>

</html> 