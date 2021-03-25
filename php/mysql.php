 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
//$sql = "INSERT INTO php (name,college,active) VALUES ('Manju', 'bfgi', '1')";
//$name=$_GET["name"];
//$college ="Bfgi";
//$active =1;
 //echo $sql = "INSERT INTO php (name,college,active) VALUES ('$name', '$college', '$active')";
//if ($conn->query($sql) === TRUE) {
   //$last_id = $conn->insert_id;
  //echo "New record created successfully. Last inserted ID is: " . $last_id;
 //else {
  //echo "Error: " . $sql . "<br>" . $conn->error;


$sql = "DELETE FROM php WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>