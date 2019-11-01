<?php include "db.php"; ?>
<?php 

function insertData() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    // preventing from sql injection
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // Encrypting the password with blowfish crypt
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $encrypt = $hashFormat . $salt;
    $password = crypt($password, $encrypt);
    
    $query = "INSERT INTO USERS(username, password)";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error($result));
    } else {
        echo "<div class='bg-success'>Record Created</div>";
    }
} 

function readData() {
    global $connection;
    $query = "SELECT * FROM users";
       
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error($result));
    } 
    while ($row = mysqli_fetch_assoc($result)) {            
        print_r($row);           
    } 
    
}



function showFetchId() {
    global $connection;
    $query = "SELECT * FROM users";
       
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error($result));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";                
  }
}

function updateData() {
    global $connection;    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE USERS SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error($connection));
    } else {
        echo "<div class='bg-success'>Record Updated</div>";
    }    
}

function deleteRow() {
    global $connection;    
    $id = $_POST['id'];

    $query = "DELETE FROM USERS ";    
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error($connection));
    } else {
        echo "<div class='bg-danger'>Record Deleted</div>";
    }   
}

?>