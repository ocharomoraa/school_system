<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    a{
      text-decoration: none;
      font-family: 
      color:#637c33;
    }
    hr{
      color: blue;
      height: 8px;
      width: 85%;
      color: #637c33 !important;
    }
  </style>
</head>
<body>

<ul style="background-color: #34CCDB;" class="nav nav-tabs">
  <li class="nav-item">
    <img src="https://static.vecteezy.com/system/resources/thumbnails/000/626/182/small/2tuju-23.jpg" width="100px" height="60px">
    
  </li>
  <?php
  if (isset($_SESSION['name'])) {


      //admin
      if ($_SESSION['role']=='teacher') {

        echo '
          <li class="nav-item">
            <a class="nav-link" href="assignmarks.php">Update Marks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addcourse.php">Add Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Add student</a>
          </li>
          
          
        ';
        
      }elseif ($_SESSION['role']=='student'){
        echo '
            <li class="nav-item">
              <a class="nav-link" href="showsubject.php">Courses</a>
          </li>
           <li class="nav-item">
              <a class="nav-link" href="showgrades.php">Results</a>
          </li>';
      }
    
      echo '<li class="nav-item"><a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true"> Hi,'.$_SESSION['role'].' '.$_SESSION['name'].'</a></li>
    <li class="nav-item"> <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>      
      </li>
  
  ';

  }else{
    //login
    echo '
       
     <li class="nav-item">
      <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
    </li>
    ';
  }
  ?>

</ul>
</div>
</div>
</nav>
<center><hr style="height: 4px color:#637c33!important;"></center>
</body>
</html>



