<?php

    $file = fopen("77 welcome.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
echo "<br>";
echo "Program by Dhruv Sikka,2220100219";
?>