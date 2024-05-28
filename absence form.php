

<?php include "header.php"; ?>

        <form action="printForm.php" method="POST">   <!--Form is type post-->
            <h1>Absence Form:</h1>
            <p>First Name: <input type="text" name="firstname" value=""/><br> <!--personal info-->
                <br>
            Last Name:  <input type="text" name="lastname" value=""/></p><br>
            <p>Password: <input type="password" name="password" value="" </p>
            <p>Enter the date of your absence: <input type="date" name="date" value=""</p><br> <!--date of absence-->
            <label>Please check off why you were not here:<br></label>                         <!--selection of reasons that student can be excused-->    
            <ps <input type="checkbox" name="sick" value="sick"/>Sick<br>
            <input type="checkbox" name="reason[]" value="personal day"/>Personal day<br>
            <input type="checkbox" name="reason[]" value="Doctors appointment"/>Doctors appointment<br>
            <input type="checkbox" name="reason[]" value="Relative's Simcha"/>Relative's Simcha<br>
            <input type="checkbox" name="reason[]" value="Other"/>Other <br>
            &nbsp &nbsp If you checked off other please specify: <input type="text" name="textbox" value="" placeholder="Explain here"/></p><br>
            <input type="submit" name="submit" value="submit"/><br>
         
        </form>

    <?php include "footer.php"; ?>

