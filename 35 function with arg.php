<?php
    function selfMultiply(&$number)
    {
        $number *= $number;
        return $number;
    }
     
    $mynum = 5;
    echo $mynum . "\n"; // Outputs: 5
	echo"<br>";
     
    selfMultiply($mynum);
    echo $mynum; // Outputs: 25
echo"<br>";
echo"Program by Dhruv Sikka , 0221BCA007";

    
?>