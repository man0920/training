 <html>
<body>
<?php
 echo $t = date("Y-m-d h:i:s");
if ($t < "20") {
  echo "This is if statement";//for if statement
}
?> <br>
 <?php
$t = date("H");

if ($t < "6") {
  echo "This is if statement";
} else {
  echo "This is if else statement";//for if else statement
}
?><br>
 <?php
$t = date("H");

if ($t < "10") {
  echo "This is if statement";
} elseif ($t < "20") {
  echo "This is if else statement";
} else {
  echo "This is if elseif else statement";//for if elseif else statement
}
?> 
</body>
</html>