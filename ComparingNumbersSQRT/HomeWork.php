<!DOCTYPE html>
<html>
<head>
	<title>Exercises 4 and 5</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
// Ex 4.
function check_square($A, $B, $C, $x)
{
   return $A * sqrt($x) + ($B * $x) + $C;
}

echo "Exercises 4 <br />";
echo "<hr>";
echo check_square(6, -4, 1, 9 )."<br />";
echo check_square(3, 4, -10, 4 )."<br />";
echo check_square(8, -10, 4, 4 )."<br />";
echo check_square(-7, -8, 14, 9 )."<br />";
//Ex 5.
function check_digit($dig1, $dig2)
{
     if($dig1 == $dig2) {
        
        return true;
     } else {
        
        return false;
     }
}

echo "Exercises 5 <br />";
echo "<hr>";
if(check_digit(5, -5)) {
	echo " Числата са равни ";
} else {
	echo " Числата не са равни";
}
echo "<br />";
if (check_digit(10, 0)) {
	echo "Числата са равни";

} else {
	echo "Числата не са равни";
}
echo "<br />";
if (check_digit(12, 0.2)) {
	echo "Числата са равни";

} else {
	echo "Числата не са равни";
}
echo "<br />";
if (check_digit(4, 20)) {
	echo "Числата са равни";

} else {
	echo "Числата не са равни";
}
echo "<br />";
if (check_digit(9, 9)) {
	echo "Числата са равни";

} else {
	echo "Числата не са равни";
}

?>
</body>
</html>