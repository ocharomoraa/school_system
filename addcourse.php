
<!DOCTYPE html>
<html>
<head>
	<title>Brook Hill School | Add Subject</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: #EBF5FB;">
	<div class="container">
			<?php include('nav.php')?>
			<div class="row">
				<div class="col-4">
					<img src="https://cdn.pixabay.com/photo/2014/05/02/23/52/castle-336498_960_720.jpg" width="600px" class="img-fluid">
				</div>
				<div class="col-6">
					<form method="POST" action="">
					  <!--<div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Subjects</label>
					    <input type="text" class="form-control" name="course_name">
					
					  </div>-->

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Subject Name</label>
					    <input type="text" class="form-control" name="subject_name">
					
					  </div>

					   
					  
			  
			  <button name="save" type="submit" class="btn btn-info">SAVE</button>
			</form>
				</div>
				
			</div>

			<?php
			/*
			1.connection to db - php and our db
			2.Capture the data from 
			3.Insert - 
				sql query
			*/

				require('dbconnect.php');
				require('checkloginstatus.php');
			if ($_SESSION['role']=='student') {
				# code...
				echo "You are a student hence cannot access this page";
				header('location:index.php');
			}

				if (isset($_POST['save'])) {
					# code...
					$subjectName = $_POST['subject_name'];
					//$courseDescesc = $_POST['course_desc'];
					

					//save above into database shop - tables - product
					//INSERT query Values ???
					$sql = "INSERT INTO subject(name) VALUES(?)";

					//prepare statement - check if the above insert is correct or not
					if ($stmt = mysqli_prepare($conn,$sql)) {
						# code...
						//bind the paramers - ? ?? - 
						//- insert data type - varchar -s , int - i double d 
						mysqli_stmt_bind_param($stmt,"s",$param_name);

						//bind
						$param_name = $subjectName;
						
		
						//$param_desc = $courseDesc;

						//execute the command - sql query - insert into db
						if (mysqli_stmt_execute($stmt)) {
							# code...
							echo "course added successfully to the database";
							//redirect go to my products
							header("location:showsubject.php");
						}else{
							echo "Something went wrong.Try again.".mysqli_error($conn);
						}
						//close the stm
						mysqli_stmt_close($stmt);

					}else{
						echo "Error in the query";
					}
					//close connection.
					 mysqli_close($conn);


				}

			?>
		
	</div>

</body>
</html>
