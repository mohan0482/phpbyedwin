<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "SEC - 4";
        echo "<br>"; 
        // functions
        function init()
        {
           say_something();
           echo "<br>";
           calc();
        }
        function calc()
        {
            $pay = 55 * 12;
            echo $pay;
        }

        function say_something()
        {
            echo "Hello Students, how r u ?";
        }
        init();
        echo "<br>";       
    ?>

    <?php 
        // passing params
        function greeting($msg){
            echo $msg;
        }
        greeting("Good Morning");
        echo "<br>"; 
    ?>

    <?php 
        // return values
        function addNum($n1, $n2){
            $sum = $n1 + $n2;
            return $sum;
        }
        echo addNum(5, 10);
        echo "<br>"; 
    ?>

    <?php 
        // Global variable and scope
        $x = "outside"; // global scope
        
        function convert() {
            global $x; // when u use this global it acts as global and not as local.
            $x = "inside"; // local scope
        }
        echo $x;
        echo convert();
        echo "<br>";
        echo $x;
        echo "<br>";
    ?>

    <?php 
        // constants
        $Lnum = 10;
        echo $Lnum;
        echo "<br>";

        define("Cnum", 1000); // this is how we use constants (cant change value)
        echo "Constant : ".Cnum;
        // Cnum = 2000; // if u try to change the value , u get err
    ?>

    <?php 
        echo "<br>";        
        echo "<br>";
        echo "SEC - 5";
        // inbuilt math func
        echo "<br>";
        echo pow(2, 7); // 2 power 7
        echo "<br>";
        echo rand(1, 1000);
        echo "<br>";
        echo sqrt(100);
        echo "<br>";
        echo ceil(4.2);
        echo "<br>";
        echo floor(4.2);
        echo "<br>";
        echo round(4.5);
        echo "------<br>";
    ?>

    <?php 
        // string func
        $string = "Hello students do you like the class";
        echo strlen($string);
        echo "<br>";
        echo strtoupper($string);
        echo "<br>";
        echo strtolower($string);
        echo "------<br>";
    ?>

    <?php 
        // array func
        $list = [1,2,15,3,145,75,12];
        echo max($list);
        echo "<br>";
        echo min($list);
        echo "<br>";
        echo print_r($list);
        echo "<br>";
        echo sort($list);
        echo "------<br>";        
    ?>

    <?php 
        echo "<br>";        
        echo "<br>";
        echo "SEC - 6";
        // form submit
    
    ?>
    
</body>
</html>