 <html>
<body>

<?php  
$x = 0;
 
while($x <= 10) {
  echo "The number is: $x <br>";
  $x++; 
} 
?> 
 <?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?> 
 <?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?> 
 <?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?> 
 

</body>
</html>