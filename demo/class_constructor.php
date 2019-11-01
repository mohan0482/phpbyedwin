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

            function __construct(){ // keeps on calling on every instance is created ... its like automatically having/calling basic things/properties.
                echo "Wheels are Moving : ". $this->wheels = 10;                
            }
            
        }       
        
    $bmw =  new Car(); //object (instance of a class)
    $truck =  new Car();
    $amz =  new Car();
    
    ?>
</body>
</html>