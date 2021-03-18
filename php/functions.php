<html>
<body>

<?php
function writeMsg() {
  echo "Hello Function!";
}
writeMsg();//call the function
?><br>
<?php 
$Global = [1,2,3];

function CompanyName(){
	global $array;
	$array = func_get_args();
	print_r($array);
	echo $array[1];
	$numargs = func_num_args();
	print_r($numargs);
	global $Global;
	print_r($Global);
	print_r($GLOBALS["Global"]);
	
}
print_r($array);
CompanyName("HMA","1982","Employees");
print_r($array);
function familyName($fname, $year ,$company="HMA") {
  echo "$fname , An employee of Marketing with $company , Born in $year <br>";
}
familyName("Srikar", "1990");
familyName("Lalit", "1990");
?>

</body>
</html>