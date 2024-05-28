<?php include "header.php"; ?>
<?php

  $fname = $_POST["firstname"];   //pull info from other page
  $lname = $_POST["lastname"];
  $day = $_POST["date"];
  $text = $_POST["textbox"];
  
echo "First Name: $fname <br>";
echo "Last Name: $lname <br>";
echo "Date: $day <br>";
foreach($_POST['reason']as $absent){  //print only the selected box from the array
      echo "Reason: $absent <br>"; 
  }
echo "$text <br>";    //print the textbox if something is written
?>
<?php include "footer.php"; ?>

