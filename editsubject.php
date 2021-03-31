<!DOCTYPE html>
<html>
<head>
	<title>Brook Hill School | Edit Subject</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
			<?php include('nav.php');

			/*require('checkloginstatus.php');

				if ($_SESSION['role']=='student') {
				# code...
				echo "You are student cannot access this page";
				header('location:index.php');
				}*/

			$subjectId = $_GET['id'];
			//echo "$productId";

			//select
			$sql = "SELECT * FROM subject WHERE id=$subjectId";
			//connection
			require('dbconnect.php');

			//execute
			$result = mysqli_query($conn,$sql);
			if ($result) {
				# code...
				$subjectRecord = mysqli_fetch_assoc($result);
				//echo "".$productRecord['name'];
			}else{
				echo "Something went wrong";
			}
			?>
			<h1>Edit <?php echo($subjectRecord['name'])?></h1>
			<div class="row">
				<div class="col-4">
					<img src="https://cdn.pixabay.com/photo/2014/05/02/23/52/castle-336498_960_720.jpg" class="img-fluid">
				</div>
				<div class="col-6">
					<form method="POST" action="">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">subject Name</label>
					    <input type="text" class="form-control" name="subject_name"  value=<?php echo "".$subjectRecord['name'];?>>
					
					  </div>

					   <!--<div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Description</label>
					    <input type="text" class="form-control" name="product_desc" value=<?php echo($productRecord['description']);?>>
					
					  </div>-->
					  <input type="hidden" name="subjectId" value=<?php echo($subjectRecord['id']);?>>

					   <!--<div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Cost</label>
					    <input type="number" class="form-control" name="product_cost" value=<?php echo($productRecord['cost']);?>>
					
					  </div>-->
					  
			  
			  <button name="save" type="submit" class="btn btn-info">UPDATE</button>
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

				//require('dbconnect.php');

				if (isset($_POST['save'])) {
					# code...
					$subjectName = $_POST['subject_name'];
					//$productCost = $_POST['product_cost'];
					//$productDesc = $_POST['product_desc'];
					//$productId = $_POST['productId'];

					//save above into database shop - tables - product
					//INSERT query Values ???
					$sql = "UPDATE  subject SET name=? WHERE id=$subjectId";

					//prepare statement - check if the above insert is correct or not
					if ($stmt = mysqli_prepare($conn,$sql)) {
						# code...
						//bind the paramers - ? ?? - 
						//- insert data type - varchar -s , int - i double d 
						mysqli_stmt_bind_param($stmt,"s",$param_name);

						//bind
						$param_name = $subjectName;
						//$param_cost = $productCost;
						//$param_desc = $productDesc;

						//execute the command - sql query - insert into db
						if (mysqli_stmt_execute($stmt)) {
							# code...
							echo "subject updated successfully in the database";
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