

<?php include "header.php"; ?>

        <form action="mail.php" method="POST">   <!--Form is type post-->
            <h1>Contact Us:</h1>
            
            <h4>Programming Academy</h4>
            <h4>(718)-123-4567</h4>
            <h4>programmingacademy123@gmail.com</h4>
            <h4>1234 Programming Road Brooklyn, NY 11230</h4><br>
            
            <h1>Email Form:</h1>
                
            <p>First Name: <input type="text" name="fname" value=""/><br> <!--personal info--> 
            <p>Last Name: <input type="text" name="lname" value=""/><br> 
            <p>Phone: <input type="tel" name="phone" value="" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/><br>
            <p>Email: <input type="email" name="email" value="" placeholder="name@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/><br>
                <br>
            <p>Message: 
                <br><textarea name="message" rows="4" cols="50"></textarea><br>
                <br>
            <input type="submit" name="submit" value="Submit"/><br>
            <br>
         
        </form>

    <?php include "footer.php"; ?>


