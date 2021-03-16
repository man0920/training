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
  <body style="text-align:center">
  <h2>Indexed array</h2>
  <?php 
  $colleges = ["BFCET","BFGI"," BFCEM "];
  print_r($colleges);
  echo "<br>";
  foreach ($colleges as $departments) {
  echo "$departments <br>";
}
  ?>
  <h2>Associative array</h2>
  <?php 
  $students =["Manju"=>"BFGI","Prerna"=>"BFGI","Aishwarya"=>"BFCEM"];
  print_r($students);
  ?>
  <h2>Multi-dimensional array</h2>
  <?php
  $contacts = array(
        array("name" => "Manju Kumari",
        "email" => "manjukumari123@mail.com",),
		array("name" => "Prerna",
        "email" => "prernaparker123@mail.com",),
		array("name" => "Aishwarya",
        "email" => "aishwarya123@mail.com",)
     );
echo "Manju Kumari's Email-id is: " . $contacts[0]["email"];echo "<br>";
echo "Prerna's Email-id is: " . $contacts[1]["email"];echo "<br>";
echo "Aishwarya's Email-id is: " . $contacts[2]["email"];

?> 
  </body></html>