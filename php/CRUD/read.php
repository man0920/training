<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    require_once "config.php";
    $sql = "SELECT * FROM employees WHERE id = ?";
		if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($_GET["id"]);
			if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
				if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
				} else{
				header("location: error.php");
                exit();
					}
			} else{
             echo "Oops! Something went wrong. Please try again later.";
				}
				mysqli_stmt_close($stmt);
		}
			
				mysqli_close($link);
	} else{
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
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
</head>
<body>
<div class= "row">
	<div class="col">
		<a href="index.php"><i href="index.php"class="fa fa-home">&nbsp;Home</i></a>
		<a href="create.php"><span href="create.php" class="white">C</span></a> 
		<a href="read.php"><span href="read.php" class="white">R</span></a>
		<a href="update.php"><span href="update.php" class="white">U</span></a> 
		<a href="delete.php"><span href="delete.php" class="white">D</span></a>
	</div>
</div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row["name"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p><b><?php echo $row["address"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p><b><?php echo $row["salary"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

