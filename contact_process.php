<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 //including php mailer
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
//mailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration for Gmail 
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = ' '; // Your Gmail email address
        $mail->Password = ' '; // Your 16-character app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // for Sender
        $mail->setFrom(' ', $name); 

        //for Recipient
        $mail->addAddress(' ', ' your Name'); 

        // content of email that you want to receive
        $mail->isHTML(false);
        $mail->Subject = 'Contact Form Submission from ' . $name;
        $mail->Body = "Name: $name\nEmail: $email\n\n$message";

        $mail->send();

        echo '<p style="color: green;">The Message was Delivered Thankyou For Sharing Your Feedback</p>';
    } catch (Exception $e) {
        echo '<p style="color: red;">There Was an Error In Delivering Your Message Try Again </p>';
    }
}
?>
