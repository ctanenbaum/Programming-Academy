<!DOCTYPE html>

<html>
    <head>
        <?php include "header.php"; ?>
        
        <meta charset="UTF-8">
        <title>Log in</title>
    </head>
    <body>
        <section class="login-form">
            <div>
            <form action="includes/login.inc.php" method="post">
                <h1>Login:</h1>
            <label>Username:</label>
             <!--checks username only uses characters a-z, A-Z, or 0-9-->
                <input type="text" name="uid" placeholder="Username/Email..." required /><br>
                <br>
                <label>Password: </label>
                <input type="password" name="pwd" placeholder="Password..." required /><br>
                <button type="submit" name="submit">Login</button><br>
                    
            </form>
            </div>
             <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login!</p>";   
                }
             }  
            
        ?> 
        </section>
         <?php include "footer.php"; ?>

    </body>
</html>