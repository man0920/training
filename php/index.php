<?php
require_once "header.php";?>
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
				echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
				echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-placement="bottom" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
				echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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