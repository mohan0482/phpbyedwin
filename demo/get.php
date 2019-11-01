<?php 
    print_r($_GET);

    $id = 200;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <a href="get.php?id=<?php echo $id; ?>">CLICK HERE</a>
</body>
</html>