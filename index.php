<!DOCTYPE html>
<html>
<head>
	<title>Brook Hill School</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: #EBF5FB;">

	<?php Include('nav.php')?><br>
		 <h1>Brook Hill School</h1>
         <br>
         <p><center>Log into the portal to view your academic information, receive personalized communication, and use our self-service tools.</center></p>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
		<div class="container-fluid">
	      <div class="row">
			<div class="col-sm">
        <img src="https://images.unsplash.com/photo-1613485252551-d95ef3015d0e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTd8fGNvdXJzZXN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="200px" class="image-fluid" border="2px"> 
        <h5 style="color: #3498DB;">COURSES</h5>
    </div>
    <div class="col-sm">
    	
    <img src="https://images.unsplash.com/photo-1561089489-f13d5e730d72?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFjYWRlbWljc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="200px" height="130px" border="2px"> 
    <h5 style="color: #3498DB;">ACADEMICS</h5>
      
    </div>
     <div class="col-sm">
    <img src="https://images.unsplash.com/photo-1551135049-8a33b5883817?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fHN0YWZmfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="200px" border="2px"> 
    <h5 style="color: #3498DB;">STAFF</h5>
</div>

    <div class="col-sm">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8Y2xhc3Nlc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="200px" border="2px">
            <h5 style="color: #3498DB;">CLASSES</h5>
        </div>


    <?php
    //connection
    require('dbconnect.php');
    //select querry

    $sql = "SELECT * FROM subject";
    //execute querry

    $results = mysqli_query($conn,$sql);
    //check if query is query

   // if ($results){

    	//if (mysqli_num_rows($results)>0){

    		//while ($record= mysqli_fetch_assoc($results)){
           
            
       /*echo '<div class="card col-4">
              
             <div class="card-body">
            
                <h5 class="card-title">Subject</h5>
               <p class="card-text">'.$record['name'].'</p>
               <a href="register.php" class="btn btn-info">Apply</a>
               
        </div>
       </div>';*/

    		//}

    	/*}else{
    		echo "<h4>No courses available</h4>";
    		echo "<a class='btn btn-primary' href='ADDPRODUCT.PHP'>Add Course</a>";
    	}

    }else{
    	echo "something went wrong";
    }*/


    ?>

</div>

    </div>
</div>

</body>
</html>