<html>
<body><pre>
   <?php
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'first_name','id');
print_r($last_names);
?> <br>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"pink","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
?><br>
<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("X5",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?><br>
<?php
function myfunction($num)
{
  return($num*$num);
}
$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?><br><?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?><br>
<?php
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
?><br>
<?php
$a=array("red","green");
print_r(array_pad($a,5,"yellow"));
?>

</pre>
</body>
</html>