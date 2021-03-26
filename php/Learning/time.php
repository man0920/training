<!DOCTYPE html>
<html>
<body style="text-align:center";>

<?= "<b>Ist time format </b><br>";
$today = date("h:i a");
echo $today;
echo "<br>";
echo "<b>2nd time format </b><br>";
 $today = date("g:i:s A"); 
 echo $today;
 echo "<br>";
 echo "<b>3rd time format </b><br>";
 $today = date("G.i a");
 echo $today;
 echo "<br>";
 echo "<b>4th time format </b><br>";
 $today = date("G:i:s A");
echo $today;
echo "<br>";
echo "<b>5th time format </b><br>";
$today = date("g:i:s:u a");
echo $today;

?>

</body>
</html>