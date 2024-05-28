<!--page4.php
    Student Login -->

<?php include "header.php"; ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

          <!--Form is type post-->
            <form method="post" action="response.php" name="loginForm">
            <h1>Login Below:</h1>
            <label>Username:</label>
            <!--checks username only uses characters a-z, A-Z, or 0-9-->
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required /><br> <!--personal info-->
           <br>
            <label>Password: </label>
            <input type="password" name="password" pattern="[a-zA-Z0-9]+" required /><br>
            <br>
            <button type="submit" name="login" value="Login">LOGIN</button>
        </form>
        <?php
        // put your code here
        ?>
   
    <?php include "footer.php"; ?>