<!DOCTYPE html>
<html lang="en">
<head> 
     <title>php</title>
	 
	 
</head>
<body>

<?php
//Display a tabular form
echo "<table border=1>";
echo "<tr>";
echo "<th>Student Name</th>";
echo "<th>English</th>";
echo "<th>Urdu</th>";
echo "<th>Maths</th>";
echo "<th>Science</th>";
echo "<th>Islamiat</th>";
echo "</tr>";
// Declare and initialize array
$names =
array('Ali','Haider','Hassan','Daniyal','Tahir','Ahmed','Saeed','Raza'
);
$english = array(50,45,23,54,54,24,56,78);
$urdu = array(12,34,56,78,99,34,23,44);
$maths = array(23,45,67,98,76,43,80,13);
$science = array(87,54,21,24,56,75,12,43);
$islamiat = array(32,34,56,22,34,56,77,54);
// Use foreach loop to display array elements
foreach( $names as $index => $name ) {
echo "<tr>";
echo "<td>$name</td>";
echo "<td>$english[$index]</td>";
echo "<td>$urdu[$index]</td>";
echo "<td>$maths[$index]</td>";
echo "<td>$science[$index]</td>";
echo "<td>$islamiat[$index]</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>