<?php 
    // CRUD - Create - Read - Update - Delete
    
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if (!$connection) {
        die ("connection failed");
    }
?>