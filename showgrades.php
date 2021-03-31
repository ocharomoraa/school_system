<!DOCTYPE html>
<html>
<head>
	<title>My School | Grades</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: #EBF5FB;">
	
	<div class="container-fluid">
	<?php 
			include('nav.php');
			/*require('checkloginstatus.php');
			if ($_SESSION['role']=='student') {
				# code...
				echo "You are a student hence cannot access this page";
				header('location:index.php');
			}*/


		?>
		<br><br>


		
		
      <div class="container">
      		
		<h2>Student Grades</h2>
		<div class="col-10">
			
		

		<table class="table table-striped">
			<tr>
				<td><h5>Name</h5></td>
				<td><h5>ID</h5></td>
				<td><h5>Score</h5></td>
			</tr>
			

		
		<?php

		/*Retrieving fetching items /records
	1.Establish connection from php and the db.
	2.Have query 
	SELECT * FROM table 
	3.Go ahead display - manipulate*/

	//connection
	//include 
	require('dbconnect.php');

	$sql = "SELECT * FROM student_marks";

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
						echo "<td>".$record['id']."</td>";
						echo "<td>".$record['score']."</td>";
					
						echo "</tr>";
				}

			}else{
				echo "<h4>No Grades available</h4>";
			}
		}else{
			echo "Something went wrong.Try again ".mysqli_error($conn);
		}


		?>

		<?php
		//delete
		/*if (isset($_POST['delete'])) {
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
		}*/

		?>

	
	</table>

	</div>
		
	</div>

</body>
</html>