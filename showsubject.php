<!DOCTYPE html>
<html>
<head>
	<title>My School | My Subjects</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: #EBF5FB;">
	
	<div class="container-fluid">
	<?php 
			include('nav.php');


		?>
		
        <br><br>

		<h2>Courses</h2>
		
      <div class="container-fluid">
			
		<div class="col-10">
			
		

		<table class="table table-striped">
			

		
		<?php

		/*Retrieving fetching items /records
	1.Establish connection from php and the db.
	2.Have query 
	SELECT * FROM table 
	3.Go ahead display - manipulate*/

	//connection
	//include 
	require('dbconnect.php');

	$sql = "SELECT * FROM subject";

	//execute 
	//use the function  mysqli_query
	/*
		conn-
		query
	*/
		$result = mysqli_query($conn,$sql);
		if ($result) {
			# code...
			//check if the resullts
			mysqli_num_rows($result);
			
			$rows = mysqli_num_rows($result);//returns the rows 
			if ($rows>0) {
				# code...
				//echo "$rows";
				//we can go ahead get the records
				//if we get them associate array id - 1
				
				while($record = mysqli_fetch_assoc($result)){
						//echo $record['name'];
						//echo "<br>";


						echo "<tr>";
						echo "<td>".$record['name']."</td>";
						/*echo "<td>
						<form method='POST' action=''>
							<a href='editsubject.php?id=".$record['id']."' class='btn btn-info'>Edit</a>
							
							<input type='hidden' value='".$record['id']."'name='subjectId'>
							<button type='submit' name='delete' class='btn btn-info' >Delete</button>
							</form>
						</td>";*/
						echo "</tr>";
				}

			}else{
				echo "<h4>No subject available</h4>";
			}
		}else{
			echo "Something went wrong.Try again ".mysqli_error($conn);
		}


		?>

		<?php
		//delete
		if (isset($_POST['delete'])) {
			$subjectId = $_POST['subjectId'];

			require_once('dbconnect.php');

			//
			$sql = "DELETE FROM subject WHERE id = ".$subjectId;

			$result = mysqli_query($conn,$sql);
			if ($result) {
				# code...
				echo '<div class="alert alert-success" role="alert">
					  Subject Deleted Successfully
						</div>	';
			}else{
				echo '<div class="alert alert-danger" role="alert">
					  Something went wrong.
						</div>	';
			}

			# code...
		}

		?>

	
	</table>

	</div>
		
	</div>

</body>
</html>