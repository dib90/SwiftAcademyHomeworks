<!DOCTYPE html>
<html>
<head>
	<title>Exercises 2,3,6,7,8</title>
</head>
<body>
<?php
//Ex2 and 3
$txt1 = "Dimitar Botev";
$txt2 = "Sofia 1000 , ul. Vuzrajdane 45";
$txt3 = "0988935099";

//I used both ways to get output
#And tihs is second ways of comment
echo "Exercises 2 <br />";
echo "<hr>";
echo "Name: $txt1 <br />";
print "Addres: $txt2 <br />";
echo "Phone number: $txt3 <br />";
/*This is a multiple-lines comment block
that spans over multiple
lines
*/
//Ex6
echo "Exercises 6 <br />";
echo "<hr>";
echo "Tomorrow I 'll learn PHP global variables.<br />";
print "This is a bad command: del C:|*.*<br />";

//Ex7
echo "Exercises 7 <br />";
echo "<hr>";
echo 'Current PHP version:' . phpversion();
echo '<br />';
//Ex8
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
echo "Exercises 8 <br />";
echo "<hr>";
echo  $actual_link;

?>
</body>
</html>