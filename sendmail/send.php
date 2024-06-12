<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'mindatastudyhub@gmail.com';   //SMTP write your email
    $mail->Password   = 'qbqnrstdclrzbgvt';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('mindatastudyhub@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $_POST["subject"];   // email subject headings
    $mail->Body    = '
    <html>
    <head>
      <title>' . htmlspecialchars($_POST['subject']) . '</title>
    </head>
    <body>
      <p><strong>Name:</strong> ' . htmlspecialchars($_POST['name']) . '</p>
      <p><strong>Mobile Number:</strong> ' . htmlspecialchars($_POST['mobile']) . '</p>
      <p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>
      <p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($_POST['message'])) . '</p>
    </body>
    </html>
    ';
    $mail->AltBody = "Name: " . htmlspecialchars($_POST['name']) . "\n" . 
                     "Mobile Number: " . htmlspecialchars($_POST['mobile']) . "\n" .
                     "Email: " . htmlspecialchars($_POST['email']) . "\n" .
                     "Message: " . htmlspecialchars($_POST['message']);

    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = '../contactus.php';
    </script>
    ";
}
?>