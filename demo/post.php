<?php 
    if (isset($_POST['submit'])) {    
        echo $_POST['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="name" id="name">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>