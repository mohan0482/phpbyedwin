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

            var $wheels = 4; // creating a property
            var $hood = 1;
            var $engine = 1;
            var $door = 4;

            function moveWheels(){ //method
                echo "Wheels are Moving : ";
                $this->wheels = 10;
            }

            function createDoors(){
                echo "<br> Total Doors : ";
                $this->door = 6;
            }
        }       
        
        $bmw =  new Car(); //object (instance of a class)
        
        class Plane extends Car { // Inheritance
            var $wheels = 20; // overriding the properties of parent
        }

        $jet = new Plane();
        // $jet->moveWheels();
        echo $jet->wheels;

        
    ?>
</body>
</html>