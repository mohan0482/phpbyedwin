<?php 
// user super global for importing
if(isset($_POST['submit'])) {
    $nameList = ['mohan','dp','channa','ashok','sharath','gani','manja','gudu','godse','mallya','kaddi','kulla','santa'];
    $min = 5;
    $max = 10;

    $userName = $_POST['un'];
    $password = $_POST['pass'];

    if(strlen($userName) < $min) {
        echo "user name should be longer than 5";
        echo "<br>"; 
    } elseif(strlen($userName) > $max) {
        echo "user name is too long make it less than 10";
        echo "<br>"; 
    } elseif(!in_array($userName, $nameList)) {
        echo "Sorry ur not aLlowed";
        echo "<br>"; 
    } else {
        echo "Welcome!!!!!!!!!!! " . $userName;
        echo "<br>"; 
    }


    echo "Hi " . $userName;
    echo " ur password is " . $password;
}
?>