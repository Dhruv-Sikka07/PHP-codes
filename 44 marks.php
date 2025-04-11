<?php

$marks = array( 
    "dhruv" => array(
        "physics" => 75,
        "maths" => 90,    
        "Bio" => 96,
        "ip" => 100,
        "psychology" => 80
    )
);

echo "Marks for dhruv:<br>";
foreach ($marks['dhruv'] as $subject => $score) {
    echo ucfirst($subject) . ": " . $score . "<br>";                
}

$total_marks = array_sum($marks['dhruv']); 

$total_subj = count($marks['dhruv']);  

$out_of = $total_subj * 100;  
$perc = ($total_marks / $out_of) * 100;

echo "<br>Total Marks: ".$total_marks."<br>";
echo "Percentage: ".number_format($perc,2)."%"."<br>";

echo "Program by Dhruv Sikka,2220100219"

?>
