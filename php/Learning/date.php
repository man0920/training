<!DOCTYPE html>
<html>
<body style="text-align:center";>

<?php
echo "<b>Ist date format </b><br>";
$today = date("F jS,l, Y");
echo $today;
echo "<br>";
echo "<b>2nd date format </b><br>";
 $today = date("m.d.y"); 
 echo $today;
 echo "<br>";
 echo "<b>3rd date format </b><br>";
 $today = date("D-j, n, Y");
 echo $today;
 echo "<br>";
 echo "<b>4th date format </b><br>";
 $today = date("j-F-Y");
echo $today;
echo "<br>";
echo "<b>5th date format </b><br>";
$today = date("M/j/Y");
echo $today;

?>

</body>
</html>
