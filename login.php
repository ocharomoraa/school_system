<!DOCTYPE html>
<html>
<head>
	<title>Brook Hill | Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: #EBF5FB;">

	<div class="container">

	<div class="alert alert-info">
		
		<center><h1>Welcome to Brook Hill School</h1>
			Login in to continue
		</center>

	</div>

		<div class="row">
			<div class="col-4">
					<img src="https://cdn.pixabay.com/photo/2014/05/02/23/52/castle-336498_960_720.jpg" class="img-fluid">
			</div>
			<div class="col">

					<form method="POST" action="">
					  

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input type="email" class="form-control" name="email" required>
					
					  </div>

					    <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" required>
					
					  </div>

					  <div class="form-group lead">
					  	<label for="userType">I'm a :</label>
					  	<input type="radio" name="userType" value="student" class="custom-radio" required> Student
					  <input type="radio" name="userType" value="teacher" class="custom-radio" required> Teacher
					   <input type="radio" name="userType" value="admin" class="custom-radio" required> Admin
					</div>

					   <br><br>
			  
			  <button name="login" type="submit" class="btn btn-info">Login</button>
			</form>

			<?php
				//check if login button has  been clicked
			if (isset($_POST['login'])) {
				# code...
				//capture the form data
				$email = $_POST['email'];
				$password = $_POST['password'];


				//connect
				require('dbconnect.php');
				//sql
				$sql = "SELECT * FROM users WHERE email = ?";

				//use bind
				//prepare the statement
				//bind

				if ($stmt = mysqli_prepare($conn,$sql)) {
					# code...
					//bind
					mysqli_stmt_bind_param($stmt,"s",$param_email,);
					$param_email = $email;
					//$param_password = $password;

					//execute the query
					mysqli_execute($stmt);

					//get results
					$result = mysqli_stmt_get_result($stmt);

					if ($result) {
					# code...
					$rows = mysqli_num_rows($result);
					if ($rows>0) {
						$record = mysqli_fetch_assoc($result);
						# code...
						//verify password
						//function password_verify
						//echo $record['password'];
						$status= password_verify($password, $record['password']);
						if ($status) {
							# code...

							echo "Successfully Logged In.Welcome ".$record['name'];
							header('location:index.php');

							//store the name of logined person
							//sessions
							session_start();
							$_SESSION['name']=$record['name'];
							$_SESSION['id'] = $record['id'];
							$_SESSION['role'] = $record['role'];

						}else{
							echo "<h4 style='color:red'>Invalid email or password.Try again</h4>";
						}
						
						
					}else{
						echo "<h4 style='color:red'>Invalid email or password.Try again</h4>";
					}

					}else{
						echo "Something is wrong ".mysqli_error($conn);
					}

				//}else{
					//echo "Something is wrong ".mysqli_error($conn);
				}

				//execute 
				//$result = mysqli_query($conn,$sql);
				

			}

			?>
			Don't have an account? <a style='text-decoration: none;'href="register.php"><span>Create Account</span></a>
			
				
			</div>
		</div>
		
	</div>
</body>

</html>