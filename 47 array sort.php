<html>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
	echo $cars[$x];
	echo "<br>";
}
echo "Program by Dhruv Sikka,2220100219"
?>

</body>
</html>