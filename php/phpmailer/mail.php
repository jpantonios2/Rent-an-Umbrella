<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["submit"]))
{

    $emailTo = $_POST['submit'];

    // connect to the database
    include ('../connection.php');

    $code = uniqid(true);
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try
    {

        $num = mysqli_real_escape_string($db, $_POST['quantity']);
        $getEmail  = "SELECT email FROM rent;";
        $resultEmail = mysqli_query($db, $getEmail);
        $rowEmail = mysqli_fetch_row($resultEmail);
        $email = $rowEmail[$num-1]; // 42

        $getFName  = "SELECT fName FROM rent;";
        $resultName = mysqli_query($db, $getFName);
        $rowName = mysqli_fetch_row($resultName);
        $fName = $rowName[$num-1]; // 42

        //Server settings
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'ezumbrella4@gmail.com'; // SMTP username
        $mail->Password = 'ybgayangfzniuxit'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 465; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        //Recipients
        $mail->setFrom('ezumbrella4@gmail.com', 'EZ Umbrella');
        $mail->addAddress($email, $fName); // Add a recipient
        $mail->addReplyTo('ezumbrella4@gmail.com', 'No reply');


        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'EZ Umbrella, Overdue Umbrella';
        $mail->Body = " <p>Dear User</p>
                        <p>It appears you have not yet returned your umbrella. Please go to a return station and return your umbrella. Upon arrival please fill out the return form</p>
                        <p>Date rented </p>
                        <p>Sincerely,</p>
                        <p>EZ Umbrella (;</p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "Message has been sent!";
    }
    catch(Exception $e)
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit();
}
?>
