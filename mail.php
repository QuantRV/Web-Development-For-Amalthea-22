<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer-master\PHPMailer-master\src\Exception.php";
require "PHPMailer-master\PHPMailer-master\src\PHPMailer.php";
require "PHPMailer-master\PHPMailer-master\src\SMTP.php";

if(isset($_POST["submit"]))
$email = "rudraaravindra@gmail.com"
$name = $_POST["name"]
$mailTo = "rudraaravindra@gmail.com" //$_POST["email"]

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rudraaravindra@gmail.com';                     //SMTP username
    $mail->Password   = 'rbsedlsmrnavpexa';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'RudraV');
    $mail->addAddress($mailTo, $name);     //Add a recipient
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Thanks For Contacting";
    $mail->Body    = "Dear" . $name . ",\n I Got Your Feedback. /n/n Thank You";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>