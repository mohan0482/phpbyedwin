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
            function moveWheels(){ //method
                echo "Wheels are Moving";
            }
        }

        if (method_exists("Car", "moveWheels")) {
            echo "Yes its there..";
        } else {
            echo "Noooooooo";
        }
        
    ?>
</body>
</html>