<?php 

    $file = "example.txt";

    if ($handle = fopen($file, 'r')) {
      echo $content = fread($handle, filesize($file)); // 20 read bite in characters // for full file
        fclose($handle);
    } else {
        echo "This application was not able to write the file";
    } 
    

?>