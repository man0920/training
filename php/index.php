<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
		.col{
		text-align:center;
		padding:20px;
		background:#17a2b8;}
		.col a{ text-decoration:none;
		padding:30px;
		font-family:terminal;
		color:white;
		font-size:25px;
		}
		.col i {font-size:30px; float:left;margin-left:80px;}
		.col a span { border-radius:5px;padding:0 5px;  color:#17a2b8; }
.white { background:white; }
#head{background:#17a2b8;
padding:10px;
color:white;
font-family:terminal;}
</style>
<script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
</script>
</head>
<body>
<div class= "row">
<div class="col"><a href="index.php"><i href="index.php"class="fa fa-home">&nbsp;Home</i></a>
<a href="create.php"><span href="create.php" class="white">C</span></a>  <a href="read.php"><span class="white">R</span></a>
<a href="update.php"><span class="white">U</span></a>  <a href="delete.php"><span class="white">D</span></a></div>
</div><br>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12" id="head">
<h2 class="pull-left">Employees Details</h2>
<a href="create.php" class="btn btn-light pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
</div>
<?php
require_once "config.php";                    
$sql = "SELECT * FROM employees";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo '<table class="table table-bordered table-striped">';
echo "<thead>";
echo "<tr>";
echo "<th>E-Id</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Salary</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>";
echo '<a href="#?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
echo '<a href="#?id='. $row['id'] .'" class="mr-3" title="Update Record" data-placement="bottom" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
echo '<a href="#?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
echo "</td>";
echo "</tr>";
}
echo "</tbody>";                            
echo "</table>";
mysqli_free_result($result);
} else{
echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
}
} else{
echo "Oops! Something went wrong. Please try again later.";
}
 mysqli_close($link);
 ?>
 </div>
 </div>        
 </div>
 </div>
</body>
</html>