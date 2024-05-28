<?php include "header.php"; ?>


<?php

   //variables to pull users data info. from form
  $fname = $_POST["fname"];  
  $lname = $_POST["lname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];
 
  
  //use and require PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  //require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/PHPMailerAutoload.php';
  //require 'PHPMailer-master/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "programmingacademy123@gmail.com";
  $mail->Password   = "kcitijcoybcxiqqe";

  $mail->IsHTML(true);
  $mail->AddAddress("programmingacademy123@gmail.com", "recipient-name");
  $mail->SetFrom("$email", "set-from-name");
  $mail->AddReplyTo("reply-to-email", "reply-to-name");
  $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  //subject line
  $mail->Subject = "Email Contact Form Submission";
  //email content
  $content = "First Name: $fname, Last Name: $lname, Phone: $phone, Email: $email, Message: $message";
     
               
  $mail->MsgHTML($content); 
  //error message if cant send
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
    //thank you message if email sent
  } else {
      echo "<br>";
      echo "<br>";
    echo "Thank you for contacting Programming Academy, your submission has been sent succesfully!";
    echo "<br>";
    echo "<br>";
  }
  
?>

<?php include "footer.php"; ?>

