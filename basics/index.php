<?php
    $name = $_GET["name"];
    $age = $_GET["age"];
    $status = "minor";

    if($age < 18){
        $status = "minor";
    }
    else{
        $status = "adult";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello, <?php echo $name; ?>!</title>
    </head>
    <body>
        <h1><?php echo "Hello, $name! ($age)"; ?></h1>
        <h1><?php echo "You are a $status"; ?></h1>
    </body>
</html>