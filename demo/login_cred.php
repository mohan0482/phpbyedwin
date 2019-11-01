<?php 
include "db.php";
include "functions.php";


if (isset($_POST['submit'])) {
    // echo "We git it";
    /*$username = $_POST['username'];
    $password = $_POST['password'];

     if ($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "This field cant be blank";
    }    
    
    $query = "INSERT INTO USERS(username, password)";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error($result));
    }*/

    insertData();
}

?>