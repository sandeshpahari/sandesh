<!DOCTYPE html>
<html>
<head>
	<title>Untitled</title>
</head>
<body>

<?php  
$Phrase1="students who comes late in Class ";
$Phrase2="in class will sit with the rock ";
$Combine= $Phrase1;
$Combine .= $Phrase2;
echo "The original full string is: $Combine <br>";
?> <hr>
Uppercase First: <?php echo ucfirst($Combine)  ?> <br>
Uppercase Words: <?php echo ucwords($Combine); ?> <br>
Lowercase: <?php echo strtolower($Combine); ?> <br>
Uppercase: <?php echo strtoupper($Combine) ; ?> <br>
<hr>
Repeat: <?php echo str_repeat($Combine, 3); ?> <br>
make substring from one point to another: <?php echo substr($Combine, 5, 10); ?> <br>
Find positon of any specific word: <?php echo strpos($Combine, "late") ?> <br>
Find character: <?php echo strchr($Combine, "C"); ?> <br>






<?php 
/*
$name="Sandesh";
echo $name; echo "<br>";
$age="22";
echo $age; echo "<br>";
$a=3;
$b=6;
$c=$a+$b;
echo $c; echo "<br>";

//Constants
$Name=45;
define("Value_PI", 3.14);
define("Value_of_Gravity", 9.8);
echo "PI Value: " . Value_PI;
echo "G Value: " . Value_of_Gravity;
$color="red";
$shirt="sleev-less";
$combination = "$color" . " " . "$shirt";
echo $combination;
 ?>
 <?php echo "$color is my fav <br>"; 
*/
  ?>




</body>
</html> 