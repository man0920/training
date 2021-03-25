<?php
require_once "config.php";
 $eid = $name = $address = $salary = "";
 $eid_err = $name_err = $address_err = $salary_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
} else{
        $name = $input_name;
    }
	$input_eid = trim($_POST["eid"]);
    if(empty($input_eid)){
 $eid_err = "Please enter the Employee's ID";     
    } elseif(!ctype_digit($input_eid)){
 $eid_err = "Please enter a positive integer value.";
    } else{
 $eid = $input_eid;
    }
$input_address = trim($_POST["address"]);
if(empty($input_address)){
$address_err = "Please enter an address.";     
 } else{
$address = $input_address;
       }
$input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
 $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
 $salary_err = "Please enter a positive integer value.";
    } else{
 $salary = $input_salary;
    }
if(empty($name_err) && empty($address_err) && empty($salary_err) && empty($eid_err))
{
	$sql = "INSERT INTO employees (name,eid, address, salary) VALUES (?, ?, ?, ?)";
	if($stmt = mysqli_prepare($link, $sql))
	{
	   mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_eid, $param_address, $param_salary);
		$param_name = $name;
		$param_eid = $eid;
		$param_address = $address;
		$param_salary = $salary;
		if(mysqli_stmt_execute($stmt))
		{
			header("location: index.php");
			exit();
		} else {
			echo "Oops! Something went wrong. Please try again later.";
		  }
		  mysqli_stmt_close($stmt);
	}

}
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
</head>
<body>
<div class= "row">
            <div class="col"><a href="index.php"><i href="index.php"class="fa fa-home">&nbsp;Home</i></a>
			<a href="create.php"><span href="create.php" class="white">C</span></a>  <a href="read.php"><span class="white">R</span></a>
			<a href="update.php"><span class="white">U</span></a>  <a href="delete.php"><span class="white">D</span></a></div>
    	</div>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h2 class="mt-5">Create Record</h2>
<p>Please fill this form and submit to add employee record to the database.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
<label>Employee id</label>
<input type="number" name="eid" class="form-control
<?php echo (!empty($eid_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $eid; ?>">
<span class="invalid-feedback"><?php echo $eid_err;?></span>
</div>
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
<span class="invalid-feedback"><?php echo $name_err;?></span>
</div>
<div class="form-group">
<label>Address</label>
<textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
<span class="invalid-feedback"><?php echo $address_err;?></span>
</div>
<div class="form-group">
<label>Salary</label>
<input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
<span class="invalid-feedback"><?php echo $salary_err;?></span>
</div>

<input type="submit" class="btn btn-primary" value="Submit">
<a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>

