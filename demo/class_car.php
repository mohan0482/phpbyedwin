<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>class</title>
</head>
<body>
    <?php 
        class Car {
            
        }
        if(class_exists("Car")){ // built in func
            echo "Yeah...!";
        } else {
            echo "NO!";
        }
    ?>
</body>
</html>