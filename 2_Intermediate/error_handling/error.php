<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $n = 4;
        try{
            if($n<=0){
                throw new Exception("Enter positive natural number");
            }
            $div = 2 / $n;
            echo $div;
        }
        catch(Exception $e){
            echo "Error: ".$e->getMessage();
        }
    ?>
</body>

</html>