<!--Content Page/Grade Page-->
<!--header-->

    
<?php include "header.php"; ?>
     

 <?php
       
        //start session
        session_start();
//if-else to check if session key LoggedIn = true to display grades
if($_SESSION['LoggedIn'] == 'TRUE') {
    
    //pulls username stored in cookie to display
    
    echo'<div style="font-size: 20px;">';
    echo "Hello ".$_COOKIE["username"];
    echo'</div>';
    echo "<br>";
    //displays class, proffesor, grades
    echo '<h3>Current Grades:</h3>';
  
    echo 'Class:';
    echo "<br>";
    echo "<br>";
    echo 'Professor:';
    echo "<br>";
    echo "<br>";
    echo 'Grade:';
    echo "<br>";
    echo "<br>";
 
}
//else - if session key LoggedIn = False - display error message and link back to original page
else {
    //($_SESSION['LoggedIn'] = 'FALSE')
            //error message
            echo '<div style="text-align: center;>';
             echo '<h3 style="text-align: center;">Username or Password is invalid:</h3>';
             //link to return to login page
              echo "<br>";
               echo "<br>";
             echo'<a href="page4.php" style="color:navy; text-align: center; font-size: 16px; text-decoration: underline;"> Click to return to the login page.</a>';
             echo "<br>";
             echo "<br>";
             echo '</div>';
        }
      
        ?>


<!--Footer-->
    <?php include "footer.php"; ?>
