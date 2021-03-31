





<!--<?php
session_start();
?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
  </li>
  

  <?php
  if (isset($_SESSION['name'])) {


      //admin
      if ($_SESSION['role']=='admin') {

        echo '
            <li class="nav-item">
              <a class="nav-link" href="addcourse.php">Add Subject</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="showsubject.php">My Subjects</a>
          </li>
        ';
        # code...
      }else{
        echo '
            <li class="nav-item">
              <a class="nav-link" href="mySubjects.php">My Subjects</a>
          </li>';
      }
    # code...
      echo '<li class="nav-item">
    
    <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true"> Hi,'.$_SESSION['name'].'</a>
    
  </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        
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
  

  
 
</ul>-->























<?php

//session_start();
?>

<ul class="nav nav-tabs bg-info">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="showsubject.php">Show Subjects</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="addcourse.php">Add Subjects</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="assignmarks.php">Assign Grades</a>
  </li>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="showgrades.php">Grades</a>
  </li>

<li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
<li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>




   
  
</ul>





