<?php
  session_start();
  ?>
<LINK rel="stylesheet" href="styles.css" type="text/css" />
<!--<p id="menu">
    <a href="index.php">Home</a>
    <a href="page1.php">Schedule</a>
    <a href="login.php">Grades</a>
    <a href="page2.php">Assignments</a>
    <a href="absence form.php">Absent Form</a>
    <a href="contactUs.php">Contact Us</a>-->
    
    <p id="menu">
    <ul id="navigation" class="slimmenu">
    <li><a href="index.php">Home</a></li>
    <li><a href="schedule.php">Schedule</a></li>
    <li><a href="login.php">Grades</a></li>
    <li> <a href="assignment.php">Assignments</a></li>
    <li> <a href="absence form.php">Absent Form</a></li>
    <li> <a href="contactUs.php">Contact Us</a></li>
          
    <li><?php 
       if (isset($_SESSION["useruid"])){
           echo "<a href='profile.php'>Profile page</a>";
           echo "<a href='includes/logout.inc.php'> Log out </a>";
       }
       else{
           echo "<a href='signup.php'>Sign up</a>";
           echo '<a href="login.php">Student Login</a>';
       }
       ?></li>
    </ul>
    
<script src="jquery.slimmenu.min.js"></script>
<script>
    $('#navigation').slimmenu(
{
    resizeWidth: '2000',
    collapserTitle: 'Main Menu',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
});
</script>
</p>
   
   
</p>