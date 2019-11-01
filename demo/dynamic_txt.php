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
        $title = "Edwin official Website";
    ?>
    <h1><?php echo $title; ?></h1>

    <?php //This is a comment
         /* This is 
        multiline comment */
        echo "<br>";
    ?>

    <?php 
        // handling variables
        $name = 'Mohan';
        $age = '29';

        echo $name . " " . $age;
        echo "<br>";
    ?>

    <?php 
        // Basic Math opr
        echo 45 + 5 * 40 / 2 - 10;
        echo "<br>";
        echo (5 + 5) * 10;
        echo "<br>";
    ?>

    <?php 
        // Arrays
        $numberList = array(15, 456, 'memaw', '<h1>hi</h1>'); // older way
        $numberList = [1, 45, 7, 8, 'axe']; // new way
        echo $numberList[0];
        echo "<br>";
        print_r($numberList); // builtin array func
        echo "<br>";
    ?>

    <?php 
        // Associative array
        $names = ["firstName" => 'mohan', "lastName" => 'sri'];
        print_r($names);
        echo "<br>";
        echo $names['firstName'];
        echo "<br>";
    ?>

    <?php 
        // if statement
        if(3 > 10) {
            echo "3 is less than 10";
        } elseif(15 > 10) {
            echo "15 not lesser";
        } else {
            echo "nothing";
        }
    ?>

    <?php 
        // comparison & logical opr
        if (4 === 4 && 5 < 10) {
            echo "TRUE <br>";
        }
    ?>

    <?php 
        // switch statement
        $num = 10;
        switch ($num) {
            case 21:
                echo "it is 21";
                break;
            case 22:
                echo "it is 22";
                break;
            case 10:
                echo "it is 10";
                break;
            default:
                echo "not found";
                break;
        }
        echo "<br>";
    ?>

    <?php 
        // while loop
        $i = 0;
        while ($i <= 10) {
            echo $i . " ";
            $i++;            
        }
        echo "<br>";       
    ?>

    <?php 
        // for loop
        for ($a=5; $a < 10; $a++) { 
            echo $a . " ";
        }
        echo "<br>";
    ?>

    <?php 
        // foreach loop only on array
        $nameList = ['a', 'b', 'c', 'd'];
        foreach ($nameList as $key => $name) { // or $nameList as $name , where key is the indices
            echo $name . "<br>";
        }        
        echo "<br>";
    ?>
</body>
</html>