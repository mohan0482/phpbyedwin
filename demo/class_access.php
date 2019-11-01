<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Access</title>
</head>
<body>
    <?php 
        class Car {

            public $wheels = 4; // avilable whole programme
            protected $hood = 1; // only class & extends
            private $engine = 1; // only that class
            var $door = 4;

            function showProp(){ 
                echo "Total hoods : " . $this->hood;
                echo "<br> Total private engines : " . $this->engine;
                
            }

            
        }       
        
    $bmw =  new Car(); //object (instance of a class)
    echo $bmw->wheels . "<br>";
    // echo $bmw->hood; // doesnt work as it is protected
    echo $bmw->showProp() . "<br>" ;

    $semi = new Semi();

    class Semi extends Car {
        function createHoods(){
            echo "<br> Total extended hoods : " . $this->hood;            
        }
        function createEngine(){
            echo "<br> Total engines : " . $this->engine; //error            
        }
    }
    echo $semi->createHoods() . "<br>" ;
    echo $semi->createEngine() . "<br>" ; // error since private
    ?>
</body>
</html>