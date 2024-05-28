<?php include "header.php"; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Create array to check username and password

$loginCombinations = array("chaya"=>"chaya123", "goldie"=>"goldie456", "fraidy"=>"fraidy789");

//start session
session_start();
//loop to check if username and password correct
foreach($loginCombinations as $username => $password){
    if($_POST['username'] == $username && $_POST['password'] == $password){
        //set session key LoggedIn to True
        $_SESSION['LoggedIn'] = 'TRUE';
	//sets cookie to store username
       setcookie('username', $_POST['username']);
       break;
    }
else{
    //set session key LoggedIn to false, if UN and PW is incorrect
    $_SESSION['LoggedIn'] = 'FALSE';
}   
}

?>
<!--displays link to grades/content page-->
<div style = "text-align: center;">
<h3>Click the link to access your Grades Record:</h3>
<a href="gradesPage.php" style="color:navy; text-align: center; font-size: 20px; text-decoration: underline;">gradesPage.php</a>
</div>
<br>
<br>
    <?php include "footer.php"; ?>
 

