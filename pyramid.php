<html lang="en">
<head> 
     <title>pyramid</title>
	
	 <meta charset="UTF-8">
           <meta name="description" content="web page">
	 
	 
</head>
<body>
<?php
for($i=0;$i<=10;$i++){	
for($j=0;$j<=$i;$j++){
echo "*";
}
echo "<br/>";
}
?>

<?php
//Star Pyramid Size
$size = 10;
for($i=1;$i<=$size;$i++){
for($j=1;$j<=$size-$i;$j++){
echo "&nbsp;&nbsp;";
}
for($k=1;$k<=$i;$k++){
echo "*&nbsp;&nbsp;";
}
echo "<br />";
}
?>

<?php
echo "<pre>";
$n = 10;
for ($i = 10; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
echo "</pre>";
?>    

<?php
echo "<pre>";
for ($i = 1; $i <= 8; $i++) {
    for ($k = 8; $k >= $i; $k--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
        if ($j == $i) {
            echo "&nbsp;";
            echo "<br/>";
        }
    }
}
echo "</pre>";
?>
</body>
</html>