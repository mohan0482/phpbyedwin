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

            static $wheels = 4; // attached to the class
            var $hood = 1;
           

            function moveWheels(){ //method
                //echo "Wheels are Moving : " . $this->wheels = 10; //doesnt work as it is static
                echo "Wheels are Moving : " . Car::$wheels = 10;

                
            }            
        }       
        
    $bmw =  new Car(); //object (instance of a class)
    echo $bmw->wheels; // doesnt work as it is static

    echo Car::$wheels; // calling static
    Car::moveWheels(); // having static data

    ?>
</body>
</html>