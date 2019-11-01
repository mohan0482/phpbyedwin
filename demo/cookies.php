<?php 
    $name = "MyName";
    $value = 100;
    $expire = time() + (60*60*24*7);
    setcookie($name, $value, $expire);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <?php 
        if (isset($_COOKIE['MyName'])) {
            $guest = $_COOKIE['MyName'];
            echo $guest;
        } else {
            $guest = "";
        }
        
    ?>
</body>
</html>