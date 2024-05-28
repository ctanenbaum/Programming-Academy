<!DOCTYPE html>

<html>
    <head>
        <?php include "header.php";
        require_once 'includes/dbh.inc.php';
     ?>
        <meta charset="UTF-8">
        <title>Sign up</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <section class="signup-form">
            <h2>Sign Up</h2>
            <div>
                <form action="includes/signup.inc.php" method="post">
                    <label>Name:</label><br>
                    <input type="text" name="name" placeholder="Full name..."><br>
                    <br>
                    <label>Email:</label><br>
                    <input type="text" name="email" placeholder="Email..."><br>
                    <br>
                    <label>Username:</label><br>
                    <input type="text" name="uid" placeholder="Username..."><br>
                    <br>
                    <label>Password:</label><br>
                    <input type="password" name="pwd" placeholder="Password..."><br>
                    <br>
                    <label>Repeat Password:</label><br>
                    <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
                    <br>
                    <label>Select a time preference for your classes:</label><br>
                    <select name="timepref">
                        
                        <?php
                        $sql="select * from preftime";
                        $results=$conn->query($sql);
                        while ($row=$results->fetch_assoc()){
                            echo '<option value="'.$row['timeid'].'">'.$row['timetext'].'</option>';
                        }
                        // select * from users, preftime, preflang where users.timepref=preftime.timeid and users.langpref=preflang.langid
                        ?>
                    </select>
                    <br>
                    <br>
                     <label>Select a language to learn:</label>
                    <br>
                    <select name="langpref">
                        <?php
                        $sql="select * from preflang";
                        $results=$conn->query($sql);
                        while ($row=$results->fetch_assoc()){
                            echo '<option value="'.$row['langid'].'">'.$row['langtext'].'</option>';
                        }
                         ?>
                    </select>
                    <br>
                    <button type="submit" name="submit">Sign Up</button><br>
                    
            </form>
            </div>
            <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";   
                }
             
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";       
                }
             
            else if($_GET["error"] == "passworddontmatch"){
                echo "<p>Password doesn't match!</p>";       
                }
        
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again!</p>";  
                }
        
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Uername already taken!</p>";        
                }
        
           else if($_GET["error"] == "none"){
                echo "<p>You have signed up!</p>";        
                }    
        }
            
        ?>
        </section>
               
         <?php include "footer.php"; ?>

    </body>
</html>
