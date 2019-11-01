<?php 

    $file = "example.txt";

    if ($handle = fopen($file, 'w')) {
        fwrite($handle, "I love PHP and this is GREAT");
        fclose($handle);
    } else {
        echo "This application was not able to write the file";
    } 
    

?>