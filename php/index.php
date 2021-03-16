<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1><?php echo "Hello, world!"; ?></h1>
<h2><?php print "Hello, php!";
 echo "HEllo"; ?></h2>
<h2><?php print "Hello,"." php!"; ?></h2>
<h2><?php print "My "." name "." is "." Manju "; ?></h2>
<h1><?php echo "Variables";?> </h1>
<?php $string = "Welcome srikar";
$int = 1; 
$float = 0.23; 
 echo "<h4> $string </h4>"; 
 echo "Hello world $string <br>";// we can use br tag in inverted commas too
 echo '$string'.'<br>'; #here variable can also declare in single inverted commas
 echo '$string'."<br>"; /*and here we use concatenation for br tag*/
 echo "$int"; echo "<br>";
// echo "$int"; echo "<br>";
 /*echo "$int"; */ echo "<br>";
 echo "$int"; // echo "<br>";
 echo "$float";
 echo "<br>";
 echo $string; ?>
 <pre><?php print_r($_POST);
 $cars = array("Volvo","BMW","Toyota");
var_dump($cars);
 $students = array("Anmol","Manju","Srikar",1,0.23,"3","0.98");
 var_dump($students);
 $students = array("Student1"=>"Anmol","Manju","Srikar",1,0.23,"3","0.98");
 var_dump($students);
 $datatypes =["int"=>2,"float"=>0.27,"string"=>"class"];
 print_r($datatypes);
 $datatypes =["int"=>$int,"float"=>$float,"string"=>$string];
 $datatypes =["int"=>$int,"float"=>$float,"string"=>$string,"datatypes"=>$datatypes];
 print_r($datatypes);
 print_r($datatypes);
 print_r($datatypes);
 echo count($students)
 foreach($cars as $car)[]
 ?></pre>
 <form style="padding:10px;" method="post">
 <label for="name">Full Name</Label><br>
 <input type="text" id="name"  value="" ><br>
 <label>Email</label><br>
 <input type="email" name="email" value="" ><br>
 <label>Contact</label><br>
 <input type="tel" name="contact" value="" ><br>
 <label>Date of birth</label><br>
 <input type="date"  name="date" value="" ><br>
 <label>Education Qualification</label><br>
 <select class="form control"><br>
 <option>Select</option>
 <option>Matriculation</option>
 <option>+2</option>
 <option>Graduation</option>
 <option>Post-Graduation</option>
 <option>Other</option>
 </select><br>
 <label>Upload Cv</label><br>
 <input type="file"  value="" ><br>
 <button type="submit" class="btn-btn-success">APPLY</button>
 </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
 